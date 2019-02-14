<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Places;
use App\Categories;
use App\Products;
use App\Services;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        schema::defaultStringLength(191);

        // if(!isset($_COOKIE['place'])){
        //     setcookie('place', 1, (86400 * 30), '/');
        // }

        /*  ------------- View share HEader---------------*/
        $places = Places::all();
        $cates = DB::table('categories')->where('idParent', 0)->where('enable',1)->get();
        $catesChilds = DB::table('categories')->where('idParent','<>', 0)->where('enable',1)->get();
        view()->share('places', $places);
        view()->share('cates', $cates);
        view()->share('catesChilds', $catesChilds);
            /*  Kết thúc View share HEader*/

         /* ---------------  View share Footer----------------*/
        // lấy các danh mục của category thời trang
        $childThoiTrang = DB::table('categories')->where('idParent', 1)->where('enable',1)->get();
        view()->share('childThoiTrang', $childThoiTrang);


        // lấy các danh mục của category xe cộ
        $childXeCo = DB::table('categories')->where('idParent', 8)->where('enable',1)->get();
        view()->share('childXeCo', $childXeCo);
        
        // lấy các danh mục của category rao vặt
        $childRaoVat = DB::table('categories')->where('idParent', 10)->where('enable',1)->get();
        view()->share('childRaoVat', $childRaoVat);

        // lấy các danh mục của category Bất động sản
        $childBDS = DB::table('categories')->where('idParent', 9)->where('enable',1)->get();
        view()->share('childBDS', $childBDS);

        // lấy các danh mục của category Ăn uống, vui chơi
        $childVuiChoi = DB::table('categories')->where('idParent', 7)->where('enable',1)->get();
        view()->share('childVuiChoi', $childVuiChoi);

        // lấy các danh mục của category Điện lạnh, gia dụng
        $childDienLanh = DB::table('categories')->where('idParent', 6)->where('enable',1)->get();
        view()->share('childDienLanh', $childDienLanh);

        // lấy các danh mục của category Sim số, thẻ cào, dịch vụ
        $childSimSo = DB::table('categories')->where('idParent', 11)->where('enable',1)->get();
        view()->share('childSimSo', $childSimSo);


        // Thông tin liên lạc
        $childLienLac = DB::table('contactadmins')->where('id', 1)->get();
        view()->share('childLienLac', $childLienLac);



       /*  Kết thúc View share Footer*/



       // đếm sp chưa duyệt
       $spchuaduyet = Products::where('adminCheck','0')->count();
       view()->share('spchuaduyet', $spchuaduyet);

       // đếm dich vu chưa duyệt
       $dichvuchuaduyet = Services::where('adminCheck','0')->count();
       view()->share('dichvuchuaduyet', $dichvuchuaduyet);


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
