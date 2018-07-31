<?php
namespace Crm\MailManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
  
class TwigSwiftMailer
{
    /**
     * @var \Swift_Mailer
     */
    protected $mailer;

    /**
     * @var \Twig_Environment
     */
    protected $twig;

   
    /**
     * TwigSwiftMailer constructor.
     *
     * @param \Swift_Mailer         $mailer    
     * @param \Twig_Environment     $twig
     * 
     */
    public function __construct(ContainerInterface $container)
    {
        $this->mailer = $container->get('mailer');
        $this->twig = $container->get('twig');
    }
    
    /**
     * @param string $templateName
     * @param array  $context
     * @param array  $fromEmail
     * @param string $toEmail
     */
    public function sendMessage($templateName, $context, $fromEmail, $toEmail, $senderName, $filepath = null, $filename= null)
    {		
        $template = $this->twig->load($templateName);
        $subject = $template->renderBlock('subject', $context);
        $textBody = $template->renderBlock('body_text', $context);

        $htmlBody = '';

        if ($template->hasBlock('body_html', $context)) {
            $htmlBody = $template->renderBlock('body_html', $context);
        }
        
        $message = \Swift_Message::newInstance()
            ->setSubject($subject)
            //->setBcc(array("nileshkumar.gupta4@gmail.com"=>"Nilesh"))
            ->setFrom($fromEmail, $senderName)
            ->setTo($toEmail);
        if (!empty($htmlBody)) {
            $message->setBody($htmlBody, 'text/html')
                ->addPart($textBody, 'text/plain');
        } else {
            $message->setBody($textBody);
        }
        if($filepath!=null){			
        	$message->attach(\Swift_Attachment::fromPath($filepath)->setFilename($filename));      	
        }
       return $this->mailer->send($message);
    }
}