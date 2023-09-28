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
    

?>