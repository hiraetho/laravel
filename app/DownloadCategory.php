<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DownloadCategory extends Model
{
    protected $table = 'download_category';


    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = ['name', 'sort', 'area_code', 'status', 'update_user', 'update_date'];

    /**
     * 在数组中隐藏的属性。
     *
     * @var array
     */
    protected $hidden = ['sort'];

    public $timestamps = false;

    public function getName(){
        $dc = DownloadCategory::find(1);
        $dc = $dc->toArray();
//        $dc = $dc->toJson();
//        echo gettype($dc);
        dump($dc);die;
//        print_r($dc);die;

//        $dc2 = DownloadCategory::where('id', '>', '20')->get();
//        print_r($dc2);die;
//        dump($dc2);die;
    }

    public function createOne()
    {
        $dc = new DownloadCategory();
        $dc->create();
    }

    public function change()
    {
        $dc = DownloadCategory::find(1);
        $dc->name = 'qw';
        $dc->save();die;
    }

    public function delete()
    {
        $dc= DownloadCategory::find(23);
        $dc->forceDelete();
    }
}
