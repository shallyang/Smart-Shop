<?php
	
    function selectId($id)
    {
        $res = DB::table('goods_type')->where('pid',$id)->get();
        $ress = [];
        if (!$res) {

        	$ress[] = DB::table('goods_table')->where('typeid',$id)->get();

        } else {

	        foreach ($res as $key => $value) {
	        		// $id = $value->id;
	        		selectId($value->id);
	        		// echo $id;
	        	}
        }
        return $ress;
    }


