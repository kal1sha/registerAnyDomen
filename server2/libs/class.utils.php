<?php
class Utils
{        
        function output($results) {
            $resultsArr = array();
            foreach($results as $resultKey => $resultVal) {
                $resultsArr[] = "$resultKey:'$resultVal'";
            }
            $resultsStr = join(',', $resultsArr);
            echo $_GET['callback']."({".$resultsStr."});";
            exit();
        }
}
?>