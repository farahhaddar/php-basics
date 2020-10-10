    <?php 
    function compare($num){
        

        
            if ( $num > 30 )
            echo "$num is greater than 30";
            elseif ( $num > 20 )
            echo "$num is greater than 20";
            elseif ( $num > 10 )
            echo "$num is greater than 10";
            elseif ( $num == 10 )
            echo "$num is equal to 10";
            else
            echo "$num is less than 10";

    


    }
    compare(40);




    ?>