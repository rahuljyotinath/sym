<?php

/**
 * all code by me
 *
 * @copyright  Stefan H.G. Buchhofer
 * @version    Release: 1.0.0
 * @link       www.ilenvo-media.de
 * @email      ilenvo@me.com
 * @year       2017
 */

namespace Pim\ProductBundle\Services\Tag\Show\Version1\Processor;

use AppBundle\Rest\Api\Manager as ApiManager;
use Metadata\Tests\Driver\Fixture\T\T;
use Pim\ProductBundle\Database\Manager as DbM;
use Pim\ProductBundle\Services\Tag\Show\Version1\Request\Request as RequestModel;
use Pim\ProductBundle\Services\Tag\Show\Version1\Response\Response as ResponseModel;
use Pim\ProductBundle\Entity\Tags as TagEntity;
use Pim\ProductBundle\Services\Common\Error;

/**
 * Class Index
 * @package Pim\ProductBundle\Services\Tag\Show\Version1\Processor
 */
class Index
{
    /**
     * @var ApiManager
     */
    private $apiM;

    /**
     * @var DbM
     */
    private $dbM;

    /**
     * @var Error
     */
    private $errorHit;

    /**
     * @var ResponseModel
     */
    private $responseModel;

    /**
     * Handler constructor.
     * @param ApiManager $apiM
     * @param DbM $dbM
     */
    public function __construct(ApiManager $apiM, DbM $dbM)
    {
        $this->apiM = $apiM;
        $this->dbM = $dbM;
        $this->errorHit = new Error();
        $this->responseModel = new ResponseModel();
    }

    /**
     * @param RequestModel $requestModel
     * @return ResponseModel
     */
    public function run(RequestModel $requestModel): ResponseModel
    {
        try {

            $tagsEntity = $this->dbM->repository()->tags()->find($requestModel->getUuid());
            if(null === $tagsEntity){
                $this->setErrorNotFoundResponse();
            } else {
                $this->responseModel = $this->mapToResponse($tagsEntity);
                $this->setSuccessResponse();
            }

        } catch (\Exception $exc) {
            $this->setErrorResponse($exc);
        }

        return $this->responseModel;
    }

    /**
     * not found response
     */
    private function setErrorNotFoundResponse()
    {
        $this->errorHit->setCode(404);
        $this->errorHit->setMessage('Tag not found in DB!');

        $this->responseModel->setCode(404);
        $this->responseModel->setError($this->errorHit);
    }

    /**
     * @param TagEntity $tagEntity
     * @return ResponseModel
     */
    private function mapToResponse(TagEntity $tagEntity)
    {
        return $this->apiM->mapper()->modelInToModelOut($tagEntity, $this->responseModel);
    }

    /**
     * @param \Exception $exc
     */
    private function setErrorResponse(\Exception $exc)
    {
        $this->errorHit->setCode(400);
        $this->errorHit->setMessage('Unkown DB error');
        $this->errorHit->setException($exc->getMessage());

        $this->responseModel->setCode(400);
        $this->responseModel->setError($this->errorHit);
    }

    private function setSuccessResponse()
    {
        $this->responseModel->setCode(200);

    }
}
