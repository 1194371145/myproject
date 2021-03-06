<?php
namespace app\admin\controller;
use app\admin\model\Special as SpecialModel;
// use common\Upload;//自定义类库
use think\Controller;
/*
*滚动栏
*/
class Special extends Controller
{
    public function getspecials(){
        $specialRes=model('special')->field('spe_img,link_url')->where('status','=',1)->order('sort DESC')->limit(3)->select();
        return json($specialRes);
    }

    public function lst()
    {
    	$specialRes=db('special')->paginate(3);
    	$this->assign([
    		'specialRes'=>$specialRes,
    		]);
        return view('list');
    }


    public function add()
    {
    	if(request()->isPost()){
    		$data=input('post.');
    		$common=new \upload\Upload;
            $file=request()->file('img');
            // print_r(request());die;
            // print_r(request()->controller());die;
            $folder=request()->controller();
            $img_path=$common->upload($file,$folder);//文件名,文件夹
            $data['spe_img']=$img_path;
            // print_r($data);die;
            $specialRes=db('special')->insert($data);
    		if($img_path){
    			$this->success('添加专题成功！','lst');
    		}else{
    			$this->error('添加专题失败！');
    		}
    		return;
    	}
        return view();
    }

    public function edit()
    {
        // dump(config('view_replace_str.__uploads__')); die;
        $id=input('id');
        if(request()->isPost()){
            $data=input('post.');
            if($_FILES['spe_img']['tmp_name']){
                 $file = request()->file('spe_img');
                 if($file){
                    $info = $file->move(ROOT_PATH . 'public' . DS . 'static' . DS . 'uploads'. DS .'special');
                    if($info){
                        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                         $data['spe_img']=$info->getSaveName();
                         // 删除原图
                         $ospecials=db('special')->field('spe_img')->find($id);
                         if($ospecials['spe_img']){
                            $oImgSrc=UPLOADS. DS .'special'. DS .$ospecials['spe_img'];
                            if(file_exists($oImgSrc)){
                                @unlink($oImgSrc);
                            }
                         }
                    }else{
                        // 上传失败获取错误信息
                        echo $file->getError();
                    }
                }
            }
            $save=db('special')->update($data);
            if($save !== false){
                $this->success('修改专题成功！','lst');
            }else{
                $this->error('修改专题失败！');
            }
            return;
        }
        $specials=db('special')->find($id);
        $this->assign([
            'specials'=>$specials,
            ]);
        return view();
    }

    public function del($id){
        $special=model('special');
        $specials=$special->field('spe_img')->find($id);
        if($specials['spe_img']){
            $ImgSrc=UPLOADS. DS .'special'. DS .$specials['spe_img'];
            if(file_exists($ImgSrc)){
                @unlink($ImgSrc);
            }
        }
        $del=$special::destroy($id);
        if($del){
            $this->success('删除专题成功！','lst');
        }else{
            $this->error('删除专题失败！');
        }
    }
}
