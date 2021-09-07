<?php
class Greeting
{
      public function helloWorld(string $lang = "") {
        $contentGreetings = file_get_contents("../data/greetings.json");
        $greetings = json_decode($contentGreetings);
        if ($lang != "") {
            if (isset($greetings ->$lang)) {
                return $greetings ->$lang;
            } else {
                return "Err 400 - Oups this language missed class today!";
            }
        } else {
            return $greetings ->es;
        }
    }
}
?>
