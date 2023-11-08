<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*public function generateRandomString($length = 10){
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0;$i < $length;$i++){
            $randomString .= $characters[rand(0,$charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateRandomName(){
        $fisrt_name = $this->generateRandomString(rand(2,15));
        $fisrt_name = strtolower($fisrt_name);
        $fisrt_name = ucfirst($fisrt_name);
        $last_name = $this->generateRandomString(rand(2,15));
        $last_name = strtolower($last_name);
        $last_name = ucfirst($last_name);
        $name = $fisrt_name . "" . $last_name;
        return $name;
    }*/
    public function generatepokemon(){
        $pokemons = array(
            '妙蛙種子',
            '妙蛙草',
            '妙蛙花',
            '小火龍',
            '火恐龍',
            '噴火龍',
            '傑尼龜',
            '卡咪龜',
            '水箭龜',
            '綠毛蟲',
            '鐵甲蛹',
            '巴大蝶',
            '獨角蟲',
            '鐵殼蛹',
            '大針蜂',
            '波波',
            '比比鳥',
            '大比鳥',
            '小拉達',
            '拉達',
            '烈雀',
            '大嘴雀',
            '阿柏蛇',
            '阿柏怪',
            '皮卡丘',
            '雷丘',
            '穿山鼠',
            '穿山王',
            '尼多蘭',
            '尼多娜',
            '尼多后',
            '尼多朗',
            '尼多力諾',
            '尼多王',
            '皮皮',
            '皮可西',
            '六尾',
            '九尾',
            '胖丁',
            '胖可丁',
            '超音蝠',
            '大嘴蝠',
            '走路草',
            '臭臭花',
            '霸王花',
            '派拉斯',
            '派拉斯特',
            '毛球',
            '摩魯蛾',
            '地鼠',
            '三地鼠',
            '喵喵',
            '貓老大',
            '可達鴨',
            '哥達鴨',
            '猴怪',
            '火爆猴',
            '卡蒂狗',
            '風速狗',
            '蚊香蝌蚪',
            '蚊香君',
            '蚊香泳士',
            '凱西',
            '勇基拉',
            '胡地',
            '腕力',
            '豪力',
            '怪力',
            '喇叭芽',
            '口呆花',
            '大食花',
            '瑪瑙水母',
            '毒刺水母',
            '小拳石',
            '隆隆石',
            '隆隆岩',
            '小火馬',
            '烈焰馬',
            '呆呆獸',
            '呆殼獸',
            '小磁怪',
            '三合一磁怪',
            '大蔥鴨',
            '嘟嘟',
            '嘟嘟利',
            '小海獅',
            '白海獅',
            '臭泥',
            '臭臭泥',
            '大舌貝',
            '刺甲貝',
            '鬼斯',
            '鬼斯通',
            '耿鬼',
            '大岩蛇',
            '催眠貘',
            '引夢貘人',
            '大鉗蟹',
            '巨鉗蟹',
            '霹靂電球',
            '頑皮雷彈',
            '蛋蛋',
            '椰蛋樹',
            '卡拉卡拉',
            '嘎啦嘎啦',
            '飛腿郎',
            '快拳郎',
            '大舌頭',
            '瓦斯彈',
            '雙彈瓦斯',
            '獨角犀牛',
            '鑽角犀獸',
            '吉利蛋',
            '蔓藤怪',
            '袋獸',
            '墨海馬',
            '海刺龍',
            '角金魚',
            '金魚王',
            '海星星',
            '寶石海星',
            '魔牆人偶',
            '飛天螳螂',
            '迷唇姐',
            '電擊獸',
            '鴨嘴火獸',
            '凱羅斯',
            '肯泰羅',
            '鯉魚王',
            '暴鯉龍',
            '拉普拉斯',
            '百變怪',
            '伊布',
            '水伊布',
            '雷伊布',
            '火伊布',
            '多邊獸',
            '菊石獸',
            '多刺菊石獸',
            '化石盔',
            '鐮刀盔',
            '化石翼龍',
            '卡比獸',
            '急凍鳥',
            '閃電鳥',
            '火焰鳥',
            '迷你龍',
            '哈克龍',
            '快龍',
            '超夢',
            '夢幻'
        );
        return $pokemons;
    }
    public function generateRandomRegion(){
        $regions = array(
            '關都',
            '城都',
            '豐緣',
            '神奧',
            '合眾',
            '卡洛斯',
            '阿羅拉',
            '伽勒爾',
            '洗翠',
            '帕底亞'
        );
        return $regions[rand(0,count($regions)-1)];
    }
    public function generateRandomgender(){
        $gender = array(
            '男',
            '女',
            '男、女',
            '無'
        );
        return $gender[rand(0,count($gender)-1)];
    }
    public function generateRandomability(){
        $ability = array(
            '茂盛',
            '猛火',
            '激流',
            '鱗粉',
            '蛻皮',
            '複眼',
            '蟲之預感',
            '銳利目光',
            '逃跑',
            '威嚇',
            '靜電',
            '沙隱',
            '毒針',
            '迷人之軀',
            '引火',
            '精神力',
            '葉綠素',
            '孢子',
            '有色眼鏡',
            '沙穴',
            '撿拾',
            '柔軟',
            '濕氣',
            '幹勁',
            '儲水',
            '同步',
            '毅力',
            '葉綠素',
            '恆淨之軀',
            '結實',
            '遲鈍',
            '磁力',
            '早起',
            '厚脂肪',
            '惡臭',
            '硬殼盔甲',
            '漂浮',
            '詛咒之軀',
            '堅硬腦袋',
            '不眠',
            '怪力鉗',
            '隔音',
            '避雷針',
            '捨身',
            '鐵拳',
            '我行我素',
            '天恩',
            '葉子防守',
            '膽量',
            '狙擊手',
            '水幕',
            '發光',
            '過濾',
            '技術高手',
            '預知夢',
            '火焰之軀',
            '破格',
            '憤怒穴位',
            '優游自如',
            '適應力',
            '蓄電',
            '下載',
            '免疫',
            '壓迫感',
            '同步'
        );
        return $ability[rand(0,count($ability)-1)];
    }

    public function run()
    {
        for($i=0;$i<151;$i++){
            $pokemon = $this->generatepokemon()[$i];
            $region = $this->generateRandomRegion();
            $gender = $this->generateRandomgender();
            $ability = $this ->generateRandomability();
            $random_datetime = Carbon::now()->subMinutes(rand(1,55));

            DB::table('pokemons')->insert([
                'pokemon' => $pokemon,
                'region' => $region,
                'tid1' => rand(1,17),
                'tid2' => rand(1,17),
                'height' => rand(0.1,14.5),
                'weight' => rand(0.0,1000),
                'gender' => $gender,
                'ability' => $ability,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
