<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

        // connexion
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::connexionAction',  '_route' => 'connexion',);
        }

        // accueil
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::accueilAction',  '_route' => 'accueil',);
        }

        // myspace
        if ($pathinfo === '/myspace') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::myspaceAction',  '_route' => 'myspace',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // calendrier
            if ($pathinfo === '/calendrier') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::calendrierAction',  '_route' => 'calendrier',);
            }

            // contact
            if ($pathinfo === '/contact') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::contactAction',  '_route' => 'contact',);
            }

        }

        // annuaire
        if ($pathinfo === '/annuaire') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::annuaireAction',  '_route' => 'annuaire',);
        }

        // plan
        if ($pathinfo === '/plan') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::planAction',  '_route' => 'plan',);
        }

        // docs
        if ($pathinfo === '/docs') {
            return array (  '_controller' => 'AppBundle\\Controller\\DocumentController::docAction',  '_route' => 'docs',);
        }

        // add
        if ($pathinfo === '/add') {
            return array (  '_controller' => 'AppBundle\\Controller\\DocumentController::uploadAction',  '_route' => 'add',);
        }

        // delete
        if ($pathinfo === '/delete') {
            return array (  '_controller' => 'AppBundle\\Controller\\DocumentController::deleteAction',  '_route' => 'delete',);
        }

        if (0 === strpos($pathinfo, '/e')) {
            // events
            if ($pathinfo === '/events') {
                return array (  '_controller' => 'AppBundle\\Controller\\EventsController::eventAction',  '_route' => 'events',);
            }

            // editEvt
            if ($pathinfo === '/editEvt') {
                return array (  '_controller' => 'AppBundle\\Controller\\EventsController::EditEvtAction',  '_route' => 'editEvt',);
            }

        }

        // deleteEvt
        if ($pathinfo === '/deleteEvt') {
            return array (  '_controller' => 'AppBundle\\Controller\\EventsController::deleteEvtAction',  '_route' => 'deleteEvt',);
        }

        // salles
        if ($pathinfo === '/salles') {
            return array (  '_controller' => 'AppBundle\\Controller\\SallesResController::salleAction',  '_route' => 'salles',);
        }

        // editRes
        if ($pathinfo === '/editRes') {
            return array (  '_controller' => 'AppBundle\\Controller\\SallesResController::EditResAction',  '_route' => 'editRes',);
        }

        // deleteRes
        if ($pathinfo === '/deleteRes') {
            return array (  '_controller' => 'AppBundle\\Controller\\SallesResController::deleteResAction',  '_route' => 'deleteRes',);
        }

        // ancarebeca_full_calendar_load
        if ($pathinfo === '/full-calendar/load') {
            return array (  '_controller' => 'AncaRebeca\\FullCalendarBundle\\Controller\\CalendarController::loadAction',  '_route' => 'ancarebeca_full_calendar_load',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
