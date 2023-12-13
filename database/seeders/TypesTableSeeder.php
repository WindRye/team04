<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generatetypes(){
        $types = array(
            '草',
            '火',
            '水',
            '蟲',
            '飛行',
            '毒',
            '一般',
            '電',
            '地面',
            '妖精',
            '格鬥',
            '超能力',
            '岩石',
            '鋼',
            '冰',
            '幽靈',
            '龍'
        );
        return $types;
    }
    public function generateSuper_effect1(){
        $super_effect1 = array(
            '水',
            '草',
            '火',
            '草',
            '草',
            '草',
            '無',
            '水',
            '火',
            '格鬥',
            '一般',
            '格鬥',
            '火',
            '冰',
            '草',
            '超能力',
            '龍'
        );
        return $super_effect1;
    }

    public function generateSuper_effect2(){
        $super_effect2 = array(
            '地面',
            '冰',
            '地面',
            '超能力',
            '格鬥',
            '妖精',
            '無',
            '飛行',
            '電',
            '龍',
            '冰',
            '毒',
            '冰',
            '岩石',
            '地面',
            '幽靈',
            '無'
        );
        return $super_effect2;
    }

    public function generateSuper_effect3(){
        $super_effect3 = array(
            '岩石',
            '蟲',
            '岩石',
            '無',
            '蟲',
            '無',
            '無',
            '無',
            '毒',
            '無',
            '岩石',
            '無',
            '飛行',
            '妖精',
            '飛行',
            '無',
            '無'
        );
        return $super_effect3;
    }

    public function generateSuper_effect4(){
        $super_effect4 = array(
            '無',
            '鋼',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '岩石',
            '無',
            '鋼',
            '無',
            '蟲',
            '無',
            '龍',
            '無',
            '無'
        );
        return $super_effect4;
    }

    public function generateSuper_effect5(){
        $super_effect5 = array(
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '鋼',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無'
        );
        return $super_effect5;
    }

    public function generateN_super_effect1(){
        $n_super_effect1 = array(
            '火',
            '火',
            '水',
            '火',
            '電',
            '毒',
            '岩石',
            '電',
            '草',
            '火',
            '毒',
            '超能力',
            '格鬥',
            '火',
            '火',
            '無',
            '鋼'
            
        );
        return $n_super_effect1;
    }

    public function generateN_super_effect2(){
        $n_super_effect2 = array(
            '草',
            '水',
            '草',
            '格鬥',
            '岩石',
            '地面',
            '鋼',
            '草',
            '蟲',
            '毒',
            '飛行',
            '鋼',
            '地面',
            '水',
            '水',
            '無',
            '無'
            
        );
        return $n_super_effect2;
    }

    public function generateN_super_effect3(){
        $n_super_effect3 = array(
            '毒',
            '岩石',
            '龍',
            '毒',
            '鋼',
            '岩石',
            '無',
            '龍',
            '無',
            '鋼',
            '超能力',
            '無',
            '鋼',
            '電',
            '冰',
            '無',
            '無'
            
        );
        return $n_super_effect3;
    }

    public function generateN_super_effect4(){
        $n_super_effect4 = array(
            '飛行',
            '龍',
            '無',
            '飛行',
            '無',
            '幽靈',
            '無',
            '無',
            '無',
            '無',
            '蟲',
            '無',
            '無',
            '鋼',
            '鋼',
            '無',
            '無'
            
        );
        return $n_super_effect4;
    }

    public function generateN_super_effect5(){
        $n_super_effect5 = array(
            '蟲',
            '無',
            '無',
            '幽靈',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '妖精',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無'
            
        );
        return $n_super_effect5;
    }

    public function generateN_super_effect6(){
        $n_super_effect6 = array(
            '龍',
            '無',
            '無',
            '鋼',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無'
        );
        return $n_super_effect6;
    }

    public function generateN_super_effect7(){
        $n_super_effect7 = array(
            '鋼',
            '無',
            '無',
            '妖精',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無',
            '無'
        );
        return $n_super_effect7;
    }

    public function generateN_effect(){
        $n_effect = array(
            '無',
            '無',
            '無',
            '無',
            '無',
            '鋼',
            '幽靈',
            '地面',
            '飛行',
            '無',
            '幽靈',
            '無',
            '無',
            '無',
            '無',
            '一般',
            '妖精'            
        );
        return $n_effect;
    }

    public function run()
    {
        for($i=0;$i<17;$i++){
            $types = $this->generatetypes()[$i];
            $super_effect1 = $this->generateSuper_effect1()[$i];
            $super_effect2 = $this->generateSuper_effect2()[$i];
            $super_effect3 = $this->generateSuper_effect3()[$i];
            $super_effect4 = $this->generateSuper_effect4()[$i];
            $super_effect5 = $this->generateSuper_effect5()[$i];
            $n_super_effect1 = $this->generateN_super_effect1()[$i];
            $n_super_effect2 = $this->generateN_super_effect2()[$i];
            $n_super_effect3 = $this->generateN_super_effect3()[$i];
            $n_super_effect4 = $this->generateN_super_effect4()[$i];
            $n_super_effect5 = $this->generateN_super_effect5()[$i];
            $n_super_effect6 = $this->generateN_super_effect6()[$i];
            $n_super_effect7 = $this->generateN_super_effect7()[$i];
            $n_effect = $this->generateN_effect()[$i];
            $random_datetime = Carbon::now()->subMinutes(rand(1,55));

            DB::table('types')->insert([
                'types' => $types,
                'super_effective1'=> $super_effect1,
                'super_effective2'=> $super_effect2,
                'super_effective3'=> $super_effect3,
                'super_effective4'=> $super_effect4,
                'super_effective5'=> $super_effect5,
                'not_very_effective1'=> $n_super_effect1,
                'not_very_effective2'=> $n_super_effect2,
                'not_very_effective3'=> $n_super_effect3,
                'not_very_effective4'=> $n_super_effect4,
                'not_very_effective5'=> $n_super_effect5,
                'not_very_effective6'=> $n_super_effect6,
                'not_very_effective7'=> $n_super_effect7,
                'not_effective'=> $n_effect,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
