<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // phnxVccBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'phnxVccBundle_homepage');
            }
            return array (  '_controller' => 'phnx\\VccBundle\\Controller\\DefaultController::indexAction',  '_route' => 'phnxVccBundle_homepage',);
        }

        // phnxVccBundle_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'phnx\\VccBundle\\Controller\\SecurityController::loginAction',  '_route' => 'phnxVccBundle_login',);
        }

        // phnxVccBundle_logincheck
        if ($pathinfo === '/login_check') {
            return array('_route' => 'phnxVccBundle_logincheck');
        }

        // phnxVccBundle_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'phnx\\VccBundle\\Controller\\UserController::logoutAction',  '_route' => 'phnxVccBundle_logout',);
        }

        // phnxVccBundle_addclub
        if ($pathinfo === '/club/add') {
            return array (  '_controller' => 'phnx\\VccBundle\\Controller\\ClubController::addAction',  '_route' => 'phnxVccBundle_addclub',);
        }

        // phnxVccBundle_deleteclub
        if (0 === strpos($pathinfo, '/club/delete') && preg_match('#^/club/delete/(?P<clubid>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'phnx\\VccBundle\\Controller\\ClubController::deleteAction',)), array('_route' => 'phnxVccBundle_deleteclub'));
        }

        // phnxVccBundle_viewclubs
        if ($pathinfo === '/club') {
            return array (  '_controller' => 'phnx\\VccBundle\\Controller\\ClubController::indexAction',  '_route' => 'phnxVccBundle_viewclubs',);
        }

        // phnxVccBundle_viewclub
        if (0 === strpos($pathinfo, '/club') && preg_match('#^/club(?:/(?P<clubid>[^/]+?))?$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'phnx\\VccBundle\\Controller\\ClubController::viewAction',  'clubid' => 0,)), array('_route' => 'phnxVccBundle_viewclub'));
        }

        // phnxVccBundle_users
        if ($pathinfo === '/user') {
            return array (  '_controller' => 'phnx\\VccBundle\\Controller\\UserController::indexAction',  '_route' => 'phnxVccBundle_users',);
        }

        // phnxVccBundle_register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'phnx\\VccBundle\\Controller\\UserController::registerAction',  '_route' => 'phnxVccBundle_register',);
        }

        // phnxVccBundle_create_user
        if ($pathinfo === '/create') {
            return array (  '_controller' => 'phnx\\VccBundle\\Controller\\UserController::createAction',  '_route' => 'phnxVccBundle_create_user',);
        }

        // phnxVccBundle_runs
        if ($pathinfo === '/runs') {
            return array (  '_controller' => 'phnx\\VccBundle\\Controller\\RunController::indexAction',  '_route' => 'phnxVccBundle_runs',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
