<?php
namespace App\Calendar;

use Carbon\Carbon;
use \App\Models\Reserve;

class CalendarView {

    private $carbon;

	function __construct($date){
        $this->carbon = new Carbon($date);
        // $dt = Carbon::createFromDate();
	}
	/**
	 * タイトル
	 */
	public function getTitle(){
		return $this->carbon->format('Y年n月');
	}
    
    function renderCalendar()
    {   
        $dt = Carbon::createFromDate();
        $dt->startOfMonth(); //今月の最初の日
        $dt->timezone = 'Asia/Tokyo'; //日本時刻で表示

        //１ヶ月前
        $sub = Carbon::createFromDate($dt->year,$dt->month,$dt->day);
        $subMonth = $sub->subMonth();
        $subY = $subMonth->year;
        $subM = $subMonth->month;

        //1ヶ月後
        $add = Carbon::createFromDate($dt->year,$dt->month,$dt->day);
        $addMonth = $add->addMonth();
        $addY = $addMonth->year;
        $addM = $addMonth->month; 

        //今月
        $today = Carbon::createFromDate();
        $todayY = $today->year;
        $todayM = $today->month;

        //リンク
        $title = '<h4>'.$dt->format('F Y').'</h4>';//月と年を表示
        $title .= '<div class="month"><caption><a class="left" href="/calendar?y='.$todayY.'&&m='.$todayM.'">今月　</a>';
        $title .= '<a class="left" href="/calendar?y='.$subY.'&&m='.$subM.'"><<前月 </a>';//前月のリンク
        $title .= '<a class="right" href="/calendar?y='.$addY.'&&m='.$addM.'"> 来月>></a></caption></div>';//来月リンク
        
        //曜日の配列作成
        $headings = ['月','火','水','木','金','土','日'];
    
        $calendar = '<table class="calendar-table">';
        $calendar .= '<thead >';
        foreach($headings as $heading){
            $calendar .= '<th class="header">'.$heading.'</th>';
        }
        $calendar .= '</thead>';
        $calendar .= '<tbody><tr>';


        //今月は何日まであるか
        $daysInMonth = $dt->daysInMonth;
        
        for ($i = 1; $i <= $daysInMonth; $i++) {

            $reserve_date = $dt->year."-".$dt->month."-".$dt->day; //日付を取得
            // $stmt = $dbh->prepare("SELECT * FROM reserves where reserve_date = :reserve_date");
            $todays_resverve = Reserve::where('reserve_date', $reserve_date)->get();
            $count = $todays_resverve->count();



            if($i==1){
                if ($dt->format('N')!= 1) {
                    $calendar .= '<td colspan="'.($dt->format('N')-1).'"></td>'; //1日が月曜じゃない場合はcospanでその分あける
                }
            }

            if($dt->format('N') == 1){
                $calendar .= '</tr><tr>'; //月曜日だったら改行
            }
            $comp = new Carbon($dt->year."-".$dt->month."-".$dt->day); //ループで表示している日
           $comp_now = Carbon::today(); //今日

           if($comp->lt($comp_now)){
                $calendar .= '<td class="day" style="background-color:#ddd; vertical-align:top;">'.$dt->day;
           }else{

            //ループの日と今日を比較
            if ($comp->eq($comp_now)) {
                //同じなので緑色の背景にする
                //    $calendar .= '<td class="day" style="background-color:#008b8b;">'.$dt->day.'</td>';
                $calendar .= '<td class="day" style="background-color:#008b8b; vertical-align:top;"><a href="/reserve?y='.$dt->year.'&&m='.$dt->month.'&&d='.$dt->day.'">'.$dt->day.'</a>';
                $calendar .= '<br>';
            }else{
                    switch ($dt->format('N')) {
                        case 6:
                            // $calendar .= '<td class="day" style="background-color:#b0e0e6">'.$dt->day.'</td>';
                            $calendar .= '<td class="day" style="background-color:#b0e0e6; vertical-align:top;"><a href="/reserve?y='.$dt->year.'&&m='.$dt->month.'&&d='.$dt->day.'">'.$dt->day.'</a>';
                            $calendar .= '<br>';
                            break;
                        case 7:
                            // $calendar .= '<td class="day" style="background-color:#f08080">'.$dt->day.'</td>';
                            $calendar .= '<td class="day" style="background-color:#f08080; vertical-align:top;"><a href="/reserve?y='.$dt->year.'&&m='.$dt->month.'&&d='.$dt->day.'">'.$dt->day.'</a>';
                            $calendar .= '<br>';
                            break;
                        default:
                            // $calendar .= '<td class="day" >'.$dt->day.'</td>';
                            // $calendar .= '<td class="day" ><a href="./reserve.php?y='.$dt->year.'&&m='.$dt->month.'&&d='.$dt->day.'">'.$dt->day.'</a></td>';
                            $calendar .= '<td class="day" style="vertical-align:top;"><a href="/reserve?y='.$dt->year.'&&m='.$dt->month.'&&d='.$dt->day.'">'.$dt->day.'</a>';
                            $calendar .= '<br>';
                            break;
                    }
                }
            }
            if ($count>0) {
                // for ($i=0; $i>$count; $i++){
                    $calendar .= $todays_resverve[0]->start_time;
                    $calendar .='〜';
                    if ($todays_resverve[0]->room_id==1){
                        $calendar .= '会議室A';

                    }else{
                        $calendar .= '会議室B';
                    }

                    if ($count>1){
                        $calendar .= '<br>';
                        $count--;
                        $calendar .= '他'.$count.'件';

                    }




            }
            $calendar .= '</td>';
            $dt->addDay();
        }

        $calendar .= '</tr></tbody>';
        $calendar .= '</table>';

        return $title.$calendar;
    }
}


?>
