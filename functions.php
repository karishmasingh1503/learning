<?php
    /*An introduction to functions*/
    /************************SYNTAX OF FUNCTION ********************* */
    /*
    * function function_name(arguments){
        body statements
    }
    */
    function add($numbers=[]){
        $sum=0;
        foreach($numbers as $number){
            $sum=$sum+$number;
        }
        return $sum;
    }
    
    function multiply($numbers=[]){
        $multiply=1;
        foreach($numbers as $number){
            $multiply=$multiply*$number;
        }
        return $multiply;
    }
    function subtract($subtract_from,$to_subtract){
        
        return $subtract_from-$to_subtract;
    }
    function devide($devide_from,$devide_by){
        
        return $devide_from/$devide_by;
    }
    function showAudio($audio_url){
        return "<embed src='".$audio_url."' autostart=true loop=true></embed><br/><br/><br/>";
    }
    function showVideo($video_url){
        return "<embed src='".$video_url."' autostart=true loop=true type='video/mp4'>
                </embed><br/><br/><br/>";
    }
    function printTable($table_of){
        for($i=1;$i<=10;$i++){
            echo $table_of."*".$i." = ".($table_of*$i)."<br/>";
        }
    }
    function countings($start,$end)
    {
        while($end>=$start){
            echo $start."&nbsp;&nbsp;&nbsp;";
            $start=$start+1;
        }
    }
    echo "Sum of [1,2,3,4,5] is ".add([1,2,3,4,5])."<br/>";
    echo "multiply of [1,2,3,4,5] is ".multiply([1,2,3,4,5])."<br/>";
    $subtract_from=mt_rand(100,999);
    $to_subtract=mt_rand(100,999);

    $devide_from=mt_rand(100,999);
    $devide_by=mt_rand(100,999);

    echo "Subtraction of ".$subtract_from." & ".$to_subtract." is ".subtract($subtract_from,$to_subtract)."<br/>";
    echo "Devision of ".$devide_from." & ".$devide_by." is ".devide($devide_from,$devide_by)."<br/><br/>";
    echo showAudio("https://www.sousound.com/music/healing/healing_01.mp3");
    echo showVideo("http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4");
    printTable(2);
    //printTable(3);
    //printTable(999);
    countings(1,10);
    function alphabet($start_type='A',$end_type='Z'){
        for($char=ord($start_type);$char<=ord($end_type);++$char){
            //echo $char;
            echo chr($char)." ";
        }
    }
    function alphabet_other_way($start=90,$end=65){
        for($start=$start;$start<=$end;++$start){
            echo chr($start)." ";
        }
    }
    echo "<br/>alphabet of ";
    alphabet('a','z');
    echo "<br/>";
    //ord() alphabet -> number
    //chr() number -> alphabet
    //ASCII STANDARD -> 
    //A->65
    //a -> 97
    /* Write a program to reverse the string 'TheGrandHotel' */
    function string_reverse($string){
        $word_array=str_split($string); 
        for($start=count($word_array)-1;$start>=0;$start--){
            echo $word_array[$start];
        }  
    }
    string_reverse('TheGrandHotel');
    echo "<br/>";


    /** THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG */
    /** REVERSE THE STRING -1 and Reverse the words of string -2 */
    string_reverse('THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG');
    echo "<br/>";
    function word_reverse($string){
        $words_array=explode(" ",$string);
        for($start=count($words_array)-1;$start>=0;$start--){
            echo $words_array[$start]." ";
        }
    }
    word_reverse('THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG');
    echo '<br/>';

    /** PROBLEM -1 -> REVERSE THE WORDS BY REVERSING CHARACTERS OF IT */
    /** Output : GOD YZAL EHT REVO SPMUJ XOF NWORB KCIUQ EHT  */

    /** PROBLEM -2 -> Print THE String BY REVERSING CHARACTERS OF Its Every Word */
    /** EHT KCIUQ NWORB XOF SPMUJ REVO EHT YZAL GOD */

?>