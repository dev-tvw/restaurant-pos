<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /*
     * Dashboard Pages Routs
     */
    public function index(Request $request)
    {
        $total_earning = 0;
        $total_orders = 0;
        $total_products = 0;
        $total_customers = 0;
        if (Auth::user()->user_type == 'kitchen') {
            return redirect()->route('kitchen');
        } elseif (Auth::user()->user_type == 'cashier') {
            return redirect()->route('pos');
        } elseif(Auth::user()->user_type == 'agency') {
            return redirect()->route('orders.all_discount_zero');
        } else {
            $latest_products = Product::whereDate('created_at', '>=', Carbon::now()->subDays(7))->orderby('id', 'desc')->paginate(10);
            $latest_orders = Order::whereDate('created_at', '>=', Carbon::now()->subDays(0))->orderby('id', 'desc')->paginate(10);
            $total_orders = Order::where('status', 0)->count();
            $total_earning = Order::where('status', 0)->sum('grand_total');
            $total_customers = Customer::count();
            $total_products = Product::count();
            $assets = ['chart', 'animation'];
            return view('dashboards.dashboard', compact('assets', 'latest_products', 'latest_orders', 'total_orders', 'total_earning', 'total_customers', 'total_products'));
        }
    }

    public function notificationsAjax(Request $request, $user_id)
    {
        $notifications = [];
        $user = User::where('id', $user_id)->first();
        if (count($user->unreadNotifications)) {
            foreach ($user->unreadNotifications as $notif) {
                $date = Carbon::parse($notif->created_at);
                $is_today = $date->isToday() ? 1 : 0;
                if ($is_today) {
                    $notifications[] = $notif;
                }
            }
        }
        return View::make('notifications/dropdown-ajax')->with('notifications', $notifications);
    }

    public function changeLanguage($local)
    {
        if (array_key_exists($local, [
            'en' => 'English',
            'ar' => 'Arabic'
        ])) {
            // Config::set([
            //     'app.locale' => $local,
            //     'app.fallback_locale' => $local,
            // ]);
            // Config::set('locale', $local);
            // Config::set('fallback_locale', $local);
            Session::put('applocale', $local);
        }
        return Redirect::back();
    }

    /*
     * Menu Style Routs
     */
    public function horizontal(Request $request)
    {
        $assets = ['chart', 'animation'];
        return view('menu-style.horizontal', compact('assets'));
    }
    public function dualhorizontal(Request $request)
    {
        $assets = ['chart', 'animation'];
        return view('menu-style.dual-horizontal', compact('assets'));
    }
    public function dualcompact(Request $request)
    {
        $assets = ['chart', 'animation'];
        return view('menu-style.dual-compact', compact('assets'));
    }
    public function boxed(Request $request)
    {
        $assets = ['chart', 'animation'];
        return view('menu-style.boxed', compact('assets'));
    }
    public function boxedfancy(Request $request)
    {
        $assets = ['chart', 'animation'];
        return view('menu-style.boxed-fancy', compact('assets'));
    }

    /*
     * Pages Routs
     */
    public function billing(Request $request)
    {
        return view('special-pages.billing');
    }

    public function calender(Request $request)
    {
        $assets = ['calender'];
        return view('special-pages.calender', compact('assets'));
    }

    public function kanban(Request $request)
    {
        return view('special-pages.kanban');
    }

    public function pricing(Request $request)
    {
        return view('special-pages.pricing');
    }

    public function rtlsupport(Request $request)
    {
        return view('special-pages.rtl-support');
    }

    public function timeline(Request $request)
    {
        return view('special-pages.timeline');
    }


    /*
     * Widget Routs
     */
    public function widgetbasic(Request $request)
    {
        return view('widget.widget-basic');
    }
    public function widgetchart(Request $request)
    {
        $assets = ['chart'];
        return view('widget.widget-chart', compact('assets'));
    }
    public function widgetcard(Request $request)
    {
        return view('widget.widget-card');
    }

    /*
     * Maps Routs
     */
    public function google(Request $request)
    {
        return view('maps.google');
    }
    public function vector(Request $request)
    {
        return view('maps.vector');
    }

    /*
     * Auth Routs
     */
    public function signin(Request $request)
    {
        return view('auth.login');
    }
    public function signup(Request $request)
    {
        return view('auth.register');
    }
    public function confirmmail(Request $request)
    {
        return view('auth.confirm-mail');
    }
    public function lockscreen(Request $request)
    {
        return view('auth.lockscreen');
    }
    public function recoverpw(Request $request)
    {
        return view('auth.recoverpw');
    }
    public function userprivacysetting(Request $request)
    {
        return view('auth.user-privacy-setting');
    }

    /*
     * Error Page Routs
     */

    public function error404(Request $request)
    {
        return view('errors.error404');
    }

    public function error500(Request $request)
    {
        return view('errors.error500');
    }
    public function maintenance(Request $request)
    {
        return view('errors.maintenance');
    }

    /*
     * uisheet Page Routs
     */
    public function uisheet(Request $request)
    {
        return view('uisheet');
    }

    /*
     * Form Page Routs
     */
    public function element(Request $request)
    {
        return view('forms.element');
    }

    public function wizard(Request $request)
    {
        return view('forms.wizard');
    }

    public function validation(Request $request)
    {
        return view('forms.validation');
    }

    /*
     * Table Page Routs
     */
    public function bootstraptable(Request $request)
    {
        return view('table.bootstraptable');
    }

    public function datatable(Request $request)
    {
        return view('table.datatable');
    }

    /*
     * Icons Page Routs
     */

    public function solid(Request $request)
    {
        return view('icons.solid');
    }

    public function outline(Request $request)
    {
        return view('icons.outline');
    }

    public function dualtone(Request $request)
    {
        return view('icons.dualtone');
    }

    public function colored(Request $request)
    {
        return view('icons.colored');
    }

    /*
     * Extra Page Routs
     */
    public function privacypolicy(Request $request)
    {
        return view('privacy-policy');
    }
    public function termsofuse(Request $request)
    {
        return view('terms-of-use');
    }
}
