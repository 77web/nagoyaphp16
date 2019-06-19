<?php


namespace Nagoya\Doukaku16;


use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    /**
     * @param string $input
     * @param string $expectedOutput
     * @dataProvider provideData
     */
    public function test_run(string $input, string $expectedOutput)
    {
        $app = new App();
        $actualOutput = $app->run($input);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function provideData()
    {
        return [
        /*0*/ [ "12345/29496/19485/09594/82457", "*****/*9*9*/*9*8*/*9*9*/82**7" ],
        /*1*/ [ "12345/11011/65432/71999/65432", "*****/*****/*****/*1999/*****" ],
        /*2*/ [ "11111/11111/11111/11111/11111", "*****/*****/*****/*****/*****" ],
        /*3*/ [ "88011/79992/69992/69993/55443", "*****/*****/*****/*****/*****" ],
        /*4*/ [ "45000/46871/46971/36771/33222", "*****/*****/*****/*****/*****" ],
        /*5*/ [ "45020/46871/46971/36771/33222", "45*20/46871/46971/36771/33222" ],
        /*6*/ [ "21550/70587/91453/20343/96389", "21**0/70*87/91***/20***/96*89" ],
        /*7*/ [ "74438/33621/27261/91783/17242", "7***8/**6**/*726*/91783/17242" ],
        /*8*/ [ "33422/69349/24553/04129/52082", "***22/69**9/2***3/0*129/52082" ],
        /*9*/ [ "24573/71679/48704/19786/91834", "2***3/71**9/4**04/1***6/91*34" ],
        /*10*/ [ "23373/18323/34943/20613/79772", "***7*/*8***/349**/2061*/7977*" ],
        /*11*/ [ "78255/11128/48232/09427/78865", "78*55/****8/48***/094*7/78865" ],
        /*12*/ [ "82972/68827/34779/89986/45211", "82*72/6**27/34**9/****6/45211" ],
        /*13*/ [ "16702/45602/15203/44906/64628", "1**02/***02/1*203/**906/6*628" ],
        /*14*/ [ "52832/05787/66710/81714/75749", "52*32/0****/***10/81*14/75*49" ],
        /*15*/ [ "84555/63383/52164/43916/20026", "8****/***83/***64/**916/20026" ],
        /*16*/ [ "72261/21028/90154/71654/51861", "7**61/***28/9**54/7*654/5*861" ],
        /*17*/ [ "98787/56708/35188/42175/68339", "*****/***0*/3*1**/421*5/68339" ],
        /*18*/ [ "92767/16790/84897/69765/75734", "92***/1***0/84**7/69***/75***" ],
        /*19*/ [ "40454/92023/68721/31223/92629", "40***/920**/687**/3****/9*6*9" ],
        /*20*/ [ "55761/98788/56838/92226/57838", "55**1/*****/56*3*/92226/57838" ],
        /*21*/ [ "43367/35324/40338/35675/17028", "***67/*5**4/*0**8/*5675/17028" ],
        /*22*/ [ "97490/41513/42468/23325/27098", "97*90/4**13/4**68/****5/*7098" ],
        /*23*/ [ "65658/53785/10987/14550/03167", "****8/*3**5/10***/14550/03167" ],
        /*24*/ [ "96825/07774/18726/17112/37496", "9**25/0***4/1**26/1*112/3*496" ],
        /*25*/ [ "66674/65657/14666/32917/83223", "****4/*****/1****/3291*/83223" ],
        /*26*/ [ "74344/97459/97302/14439/35689", "7****/97**9/97*02/1***9/3**89" ],
        /*27*/ [ "63956/98856/98586/88356/59386", "63*56/***56/**586/**356/5*386" ],
        /*28*/ [ "55204/29155/42023/28114/27173", "55*04/29*55/42***/28***/27*7*" ],
        /*29*/ [ "96259/76240/06333/98212/70575", "96**9/76**0/06***/98***/70575" ],
        /*30*/ [ "96778/95391/95497/11300/85047", "9****/9**91/9**97/11*00/85047" ],
        /*31*/ [ "12618/16611/96673/43535/82667", "12*18/1**11/9***3/43*35/82***" ],
        /*32*/ [ "84348/77650/49246/62965/07154", "****8/****0/492*6/62965/07154" ],
        /*33*/ [ "21172/32169/46995/38254/43735", "***72/***69/*6995/*8254/**735" ],
        /*34*/ [ "98528/96666/78713/82600/76116", "98*28/9****/***13/*2*00/**116" ],
        /*35*/ [ "56543/64480/21582/03631/46244", "*****/***80/21*82/03*31/46244" ],
        /*36*/ [ "42865/87706/56970/17609/39789", "42*65/***06/**970/1**0*/39***" ],
        /*37*/ [ "41774/61265/57974/29143/55908", "41***/612**/579**/291**/55908" ],
        /*38*/ [ "03797/09776/26074/20987/35589", "03*9*/09***/260*4/20***/355**" ],
        /*39*/ [ "72261/22155/23330/53106/43155", "7**61/***55/****0/**106/**155" ],
        /*40*/ [ "56420/39322/05102/76122/03879", "56**0/39***/05***/76***/03879" ],
        /*41*/ [ "77665/95657/13657/94094/13762", "*****/9***7/13**7/94094/13762" ],
        /*42*/ [ "66110/25706/49002/77901/36519", "66***/257*6/49***/779**/365*9" ],
        /*43*/ [ "21244/58340/37447/06079/25691", "*****/58**0/37**7/06079/25691" ],
        /*44*/ [ "10180/11677/22208/34867/28064", "***80/**677/***08/**867/*8064" ],
        /*45*/ [ "34503/83687/42707/02558/12933", "***03/8**87/4**07/**558/**933" ],
        ];
    }
}
