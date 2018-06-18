<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appSeDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/pim')) {
            // pim_video_default_index
            if ('/pim/video' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'pim_video_default_index');
                }

                return array (  '_controller' => 'Pim\\VideoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pim_video_default_index',);
            }

            if (0 === strpos($pathinfo, '/pim/attribute/set')) {
                // pim_attribute_set_backend_list
                if ('/pim/attribute/set/list' === $pathinfo) {
                    return array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Backend\\AttributeSetController::listAction',  '_route' => 'pim_attribute_set_backend_list',);
                }

                // pim_attribute_set_backend_add
                if ('/pim/attribute/set/add' === $pathinfo) {
                    return array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Backend\\AttributeSetController::addAction',  '_route' => 'pim_attribute_set_backend_add',);
                }

                // pim_attribute_set_backend_delete
                if (0 === strpos($pathinfo, '/pim/attribute/set/delete') && preg_match('#^/pim/attribute/set/delete/(?P<uuid>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_attribute_set_backend_delete')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Backend\\AttributeSetController::deleteAction',));
                }

                // pim_attribute_set_backend_show
                if (0 === strpos($pathinfo, '/pim/attribute/set/show') && preg_match('#^/pim/attribute/set/show/(?P<uuid>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_attribute_set_backend_show')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Backend\\AttributeSetController::showAction',));
                }

                // pim_attribute_set_backend_edit
                if (0 === strpos($pathinfo, '/pim/attribute/set/edit') && preg_match('#^/pim/attribute/set/edit(?:/(?P<uuid>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_attribute_set_backend_edit')), array (  'uuid' => 'none',  '_controller' => 'Pim\\ProductBundle\\Controller\\Backend\\AttributeSetController::editAction',));
                }

            }

            // pim_category_backend_list
            if ('/pim/category/list' === $pathinfo) {
                return array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Backend\\CategoryController::listAction',  '_route' => 'pim_category_backend_list',);
            }

            // pim_category_backend_add
            if ('/pim/category/add' === $pathinfo) {
                return array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Backend\\CategoryController::addAction',  '_route' => 'pim_category_backend_add',);
            }

            // pim_product_backend_list
            if ('/pim/product/list' === $pathinfo) {
                return array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Backend\\ProductController::listAction',  '_route' => 'pim_product_backend_list',);
            }

            // pim_product_backend_add
            if ('/pim/product/add' === $pathinfo) {
                return array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Backend\\ProductController::addAction',  '_route' => 'pim_product_backend_add',);
            }

            if (0 === strpos($pathinfo, '/pim/tags')) {
                // pim_tag_backend_list
                if ('/pim/tags/list' === $pathinfo) {
                    return array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Backend\\TagsController::listAction',  '_route' => 'pim_tag_backend_list',);
                }

                // pim_tag_backend_add
                if ('/pim/tags/add' === $pathinfo) {
                    return array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Backend\\TagsController::addAction',  '_route' => 'pim_tag_backend_add',);
                }

                // pim_tag_backend_show
                if (0 === strpos($pathinfo, '/pim/tags/show') && preg_match('#^/pim/tags/show/(?P<uuid>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_tag_backend_show')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Backend\\TagsController::showAction',));
                }

                // pim_tag_backend_delete
                if (0 === strpos($pathinfo, '/pim/tags/delete') && preg_match('#^/pim/tags/delete/(?P<uuid>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_tag_backend_delete')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Backend\\TagsController::deleteAction',));
                }

                // pim_tag_backend_edit
                if (0 === strpos($pathinfo, '/pim/tags/edit') && preg_match('#^/pim/tags/edit(?:/(?P<uuid>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_tag_backend_edit')), array (  'uuid' => 'none',  '_controller' => 'Pim\\ProductBundle\\Controller\\Backend\\TagsController::editAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // app_profile
            if ('/profile' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TopNavController::profileAction',  '_route' => 'app_profile',);
            }

            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // admin_homepage
            if ('/admin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'admin_homepage');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::homepageAction',  '_route' => 'admin_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/company')) {
                // company_index
                if ('/admin/company' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_company_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'company_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CompanyController::indexAction',  '_route' => 'company_index',);
                }
                not_company_index:

                // company_new
                if ('/admin/company/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_company_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CompanyController::newAction',  '_route' => 'company_new',);
                }
                not_company_new:

                // company_show
                if (preg_match('#^/admin/company/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_company_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'company_show')), array (  '_controller' => 'AppBundle\\Controller\\CompanyController::showAction',));
                }
                not_company_show:

                // company_edit
                if (preg_match('#^/admin/company/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_company_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'company_edit')), array (  '_controller' => 'AppBundle\\Controller\\CompanyController::editAction',));
                }
                not_company_edit:

                // company_delete
                if (preg_match('#^/admin/company/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_company_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'company_delete')), array (  '_controller' => 'AppBundle\\Controller\\CompanyController::deleteAction',));
                }
                not_company_delete:

            }

            // app_homepage
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\GentelellaController::homepageAction',  '_route' => 'app_homepage',);
            }

        }

        elseif (0 === strpos($pathinfo, '/ap')) {
            if (0 === strpos($pathinfo, '/app')) {
                if (0 === strpos($pathinfo, '/app/center')) {
                    // app_center_list
                    if ('/app/center/list' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\CenterController::listAction',  '_route' => 'app_center_list',);
                    }

                    // app_center_new
                    if ('/app/center/new' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\CenterController::newAction',  '_route' => 'app_center_new',);
                    }

                    // app_center_show
                    if (preg_match('#^/app/center/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_center_show')), array (  '_controller' => 'AppBundle\\Controller\\CenterController::showAction',));
                    }

                    // app_center_edit
                    if (preg_match('#^/app/center/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_center_edit')), array (  '_controller' => 'AppBundle\\Controller\\CenterController::editAction',));
                    }

                    // app_center_delete
                    if (preg_match('#^/app/center/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_center_delete')), array (  '_controller' => 'AppBundle\\Controller\\CenterController::deleteAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/app/common')) {
                    // app_common_list
                    if ('/app/common/list' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\CommonSpaceController::listAction',  '_route' => 'app_common_list',);
                    }

                    // app_common_new
                    if ('/app/common/new' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\CommonSpaceController::newAction',  '_route' => 'app_common_new',);
                    }

                    // app_common_show
                    if (preg_match('#^/app/common/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_common_show')), array (  '_controller' => 'AppBundle\\Controller\\CommonSpaceController::showAction',));
                    }

                    // app_common_edit
                    if (preg_match('#^/app/common/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_common_edit')), array (  '_controller' => 'AppBundle\\Controller\\CommonSpaceController::editAction',));
                    }

                    // app_common_delete
                    if (preg_match('#^/app/common/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_common_delete')), array (  '_controller' => 'AppBundle\\Controller\\CommonSpaceController::deleteAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/app/individual')) {
                    // app_individual_list
                    if ('/app/individual/list' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\IndividualController::listAction',  '_route' => 'app_individual_list',);
                    }

                    // app_individual_new
                    if ('/app/individual/new' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\IndividualController::newAction',  '_route' => 'app_individual_new',);
                    }

                    // app_individual_show
                    if (preg_match('#^/app/individual/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_individual_show')), array (  '_controller' => 'AppBundle\\Controller\\IndividualController::showAction',));
                    }

                    // app_individual_edit
                    if (preg_match('#^/app/individual/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_individual_edit')), array (  '_controller' => 'AppBundle\\Controller\\IndividualController::editAction',));
                    }

                    // app_individual_delete
                    if (preg_match('#^/app/individual/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_individual_delete')), array (  '_controller' => 'AppBundle\\Controller\\IndividualController::deleteAction',));
                    }

                    // app_individual_makeuser
                    if (preg_match('#^/app/individual/(?P<id>[^/]++)/makeuser$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_individual_makeuser')), array (  '_controller' => 'AppBundle\\Controller\\IndividualController::makeuserAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/app/private')) {
                    // app_private_list
                    if ('/app/private/list' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PrivateSpaceController::listAction',  '_route' => 'app_private_list',);
                    }

                    // app_private_new
                    if ('/app/private/new' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PrivateSpaceController::newAction',  '_route' => 'app_private_new',);
                    }

                    // app_private_show
                    if (preg_match('#^/app/private/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_private_show')), array (  '_controller' => 'AppBundle\\Controller\\PrivateSpaceController::showAction',));
                    }

                    // app_private_edit
                    if (preg_match('#^/app/private/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_private_edit')), array (  '_controller' => 'AppBundle\\Controller\\PrivateSpaceController::editAction',));
                    }

                    // app_private_delete
                    if (preg_match('#^/app/private/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_private_delete')), array (  '_controller' => 'AppBundle\\Controller\\PrivateSpaceController::deleteAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/app/user')) {
                    // app_user_list
                    if ('/app/user/list' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\UserController::listAction',  '_route' => 'app_user_list',);
                    }

                    // app_user_show
                    if (preg_match('#^/app/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_user_show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showAction',));
                    }

                    // app_user_new
                    if ('/app/user/new' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\UserController::newAction',  '_route' => 'app_user_new',);
                    }

                    // app_user_edit
                    if (preg_match('#^/app/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_user_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
                    }

                    // app_user_delete
                    if (preg_match('#^/app/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_user_delete')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',));
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/api/v1')) {
                if (0 === strpos($pathinfo, '/api/v1/attributeSet')) {
                    // api_rest_add_attribute_set_v1
                    if (0 === strpos($pathinfo, '/api/v1/attributeSet/add') && preg_match('#^/api/v1/attributeSet/add(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_api_rest_add_attribute_set_v1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_add_attribute_set_v1')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Rest\\AttributeSetController::addAttributeSetAction',  '_format' => NULL,));
                    }
                    not_api_rest_add_attribute_set_v1:

                    // api_rest_list_attribute_sets_v1
                    if (0 === strpos($pathinfo, '/api/v1/attributeSet/list') && preg_match('#^/api/v1/attributeSet/list(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_api_rest_list_attribute_sets_v1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_list_attribute_sets_v1')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Rest\\AttributeSetController::listAttributeSetsAction',  '_format' => NULL,));
                    }
                    not_api_rest_list_attribute_sets_v1:

                    // api_rest_update_attribute_set_v1
                    if (preg_match('#^/api/v1/attributeSet/(?P<uuid>[^/]++)/update(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if ('PUT' !== $canonicalMethod) {
                            $allow[] = 'PUT';
                            goto not_api_rest_update_attribute_set_v1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_update_attribute_set_v1')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Rest\\AttributeSetController::updateAttributeSetAction',  '_format' => NULL,));
                    }
                    not_api_rest_update_attribute_set_v1:

                    // api_rest_show_attribute_set_v1
                    if (preg_match('#^/api/v1/attributeSet/(?P<uuid>[^/]++)/show(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_api_rest_show_attribute_set_v1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_show_attribute_set_v1')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Rest\\AttributeSetController::showAttributeSetAction',  '_format' => NULL,));
                    }
                    not_api_rest_show_attribute_set_v1:

                    // api_rest_delete_attribute_set_v1
                    if (preg_match('#^/api/v1/attributeSet/(?P<uuid>[^/]++)/delete(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_api_rest_delete_attribute_set_v1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_delete_attribute_set_v1')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Rest\\AttributeSetController::deleteAttributeSetAction',  '_format' => NULL,));
                    }
                    not_api_rest_delete_attribute_set_v1:

                }

                elseif (0 === strpos($pathinfo, '/api/v1/product')) {
                    // api_rest_add_product_v1
                    if (0 === strpos($pathinfo, '/api/v1/product/add') && preg_match('#^/api/v1/product/add(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_api_rest_add_product_v1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_add_product_v1')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Rest\\ProductController::addProductAction',  '_format' => NULL,));
                    }
                    not_api_rest_add_product_v1:

                    // api_rest_list_product_v1
                    if (0 === strpos($pathinfo, '/api/v1/products/list') && preg_match('#^/api/v1/products/list(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_api_rest_list_product_v1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_list_product_v1')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Rest\\ProductController::listProductAction',  '_format' => NULL,));
                    }
                    not_api_rest_list_product_v1:

                    // api_rest_update_product_v1
                    if (0 === strpos($pathinfo, '/api/v1/product/update') && preg_match('#^/api/v1/product/update(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if ('PUT' !== $canonicalMethod) {
                            $allow[] = 'PUT';
                            goto not_api_rest_update_product_v1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_update_product_v1')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Rest\\ProductController::updateProductAction',  '_format' => NULL,));
                    }
                    not_api_rest_update_product_v1:

                    // api_rest_delete_product_v1
                    if (0 === strpos($pathinfo, '/api/v1/product/delete') && preg_match('#^/api/v1/product/delete(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_api_rest_delete_product_v1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_delete_product_v1')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Rest\\ProductController::deleteProductAction',  '_format' => NULL,));
                    }
                    not_api_rest_delete_product_v1:

                }

                elseif (0 === strpos($pathinfo, '/api/v1/category')) {
                    // api_rest_add_category_v1
                    if (0 === strpos($pathinfo, '/api/v1/category/add') && preg_match('#^/api/v1/category/add(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_api_rest_add_category_v1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_add_category_v1')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Rest\\CategoryController::addCategoryAction',  '_format' => NULL,));
                    }
                    not_api_rest_add_category_v1:

                    // api_rest_update_category_v1
                    if (0 === strpos($pathinfo, '/api/v1/category/update') && preg_match('#^/api/v1/category/update(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if ('PUT' !== $canonicalMethod) {
                            $allow[] = 'PUT';
                            goto not_api_rest_update_category_v1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_update_category_v1')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Rest\\CategoryController::updateCategoryAction',  '_format' => NULL,));
                    }
                    not_api_rest_update_category_v1:

                    // api_rest_delete_category_v1
                    if (0 === strpos($pathinfo, '/api/v1/category/delete') && preg_match('#^/api/v1/category/delete(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_api_rest_delete_category_v1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_delete_category_v1')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Rest\\CategoryController::deleteCategoryAction',  '_format' => NULL,));
                    }
                    not_api_rest_delete_category_v1:

                }

                // api_rest_list_categories_v1
                if (0 === strpos($pathinfo, '/api/v1/categories/list') && preg_match('#^/api/v1/categories/list(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_rest_list_categories_v1;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_list_categories_v1')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Rest\\CategoryController::listCategoriesAction',  '_format' => NULL,));
                }
                not_api_rest_list_categories_v1:

                if (0 === strpos($pathinfo, '/api/v1/tag')) {
                    // api_rest_add_tag_v1
                    if (0 === strpos($pathinfo, '/api/v1/tag/add') && preg_match('#^/api/v1/tag/add(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_api_rest_add_tag_v1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_add_tag_v1')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Rest\\TagsController::addTagAction',  '_format' => NULL,));
                    }
                    not_api_rest_add_tag_v1:

                    // api_rest_list_tags_v1
                    if (0 === strpos($pathinfo, '/api/v1/tags/list') && preg_match('#^/api/v1/tags/list(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_api_rest_list_tags_v1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_list_tags_v1')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Rest\\TagsController::listTagsAction',  '_format' => NULL,));
                    }
                    not_api_rest_list_tags_v1:

                    // api_rest_update_tag_v1
                    if (preg_match('#^/api/v1/tag/(?P<uuid>[^/]++)/update(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if ('PUT' !== $canonicalMethod) {
                            $allow[] = 'PUT';
                            goto not_api_rest_update_tag_v1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_update_tag_v1')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Rest\\TagsController::updateTagAction',  '_format' => NULL,));
                    }
                    not_api_rest_update_tag_v1:

                    // api_rest_show_tag_v1
                    if (preg_match('#^/api/v1/tag/(?P<uuid>[^/]++)/show(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_api_rest_show_tag_v1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_show_tag_v1')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Rest\\TagsController::showTagAction',  '_format' => NULL,));
                    }
                    not_api_rest_show_tag_v1:

                    // api_rest_delete_tag_v1
                    if (preg_match('#^/api/v1/tag/(?P<uuid>[^/]++)/delete(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_api_rest_delete_tag_v1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_delete_tag_v1')), array (  '_controller' => 'Pim\\ProductBundle\\Controller\\Rest\\TagsController::deleteTagAction',  '_format' => NULL,));
                    }
                    not_api_rest_delete_tag_v1:

                }

            }

            // nelmio_api_doc_index
            if (0 === strpos($pathinfo, '/apidoc') && preg_match('#^/apidoc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_nelmio_api_doc_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
            }
            not_nelmio_api_doc_index:

        }

        // app_gentelella
        if (0 === strpos($pathinfo, '/gentelella') && preg_match('#^/gentelella(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_gentelella')), array (  'page' => 'index',  '_controller' => 'AppBundle\\Controller\\GentelellaController::gentelellaAction',));
        }

        // app_dashboard
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'app_dashboard');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\SidebarController::dashboardAction',  '_route' => 'app_dashboard',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // app_calendar
            if ('/calendar' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SidebarController::calendarAction',  '_route' => 'app_calendar',);
            }

            // app_contacts
            if ('/contacts' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SidebarController::contactsAction',  '_route' => 'app_contacts',);
            }

            // crm_invoice_invoice_list
            if ('/crm/invoice/list' === $pathinfo) {
                return array (  '_controller' => 'Crm\\InvoiceBundle\\Controller\\Backend\\InvoiceController::listAction',  '_route' => 'crm_invoice_invoice_list',);
            }

        }

        // dms_documents_default_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'dms_documents_default_index');
            }

            return array (  '_controller' => 'Dms\\DocumentsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'dms_documents_default_index',);
        }

        // crm_newsletter_default_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'crm_newsletter_default_index');
            }

            return array (  '_controller' => 'Crm\\NewsletterBundle\\Controller\\DefaultController::indexAction',  '_route' => 'crm_newsletter_default_index',);
        }

        // crm_customer_default_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'crm_customer_default_index');
            }

            return array (  '_controller' => 'Crm\\CustomerBundle\\Controller\\DefaultController::indexAction',  '_route' => 'crm_customer_default_index',);
        }

        // crm_calendar_default_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'crm_calendar_default_index');
            }

            return array (  '_controller' => 'Crm\\CalendarBundle\\Controller\\DefaultController::indexAction',  '_route' => 'crm_calendar_default_index',);
        }

        // crm_order_default_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'crm_order_default_index');
            }

            return array (  '_controller' => 'Crm\\OrderBundle\\Controller\\DefaultController::indexAction',  '_route' => 'crm_order_default_index',);
        }

        // crm_contacts_default_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'crm_contacts_default_index');
            }

            return array (  '_controller' => 'Crm\\ContactsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'crm_contacts_default_index',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        // ef_connect
        if (0 === strpos($pathinfo, '/efconnect') && preg_match('#^/efconnect(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ef_connect')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::loadAction',  'instance' => 'default',  'homeFolder' => '',));
        }

        // elfinder
        if (0 === strpos($pathinfo, '/elfinder') && preg_match('#^/elfinder(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'elfinder')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::showAction',  'instance' => 'default',  'homeFolder' => '',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
