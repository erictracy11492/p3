<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PigLatinController extends Controller
{
    //
    
    public function index(Request $request) 
    {
        if ($request->has('usertext')) {
        $this->validate($request, [
        'usertext' => 'required',
        ]);
        }

        #Retrieve data from form
        $usertext = $request->input('usertext', ''); //$_GET
        $words = explode(' ', $usertext);
        $useroutput = '';
        
        if (!empty($usertext)) {
            foreach ($words as $word) {
                $translatedword = substr($word, 1);
                $vowels = str_split('aeiouAEIOU');
                    if (isset($_GET['threeletter'])) {
                        if (strlen($word) > 3) {
                            if (in_array($word[0], $vowels)) {
                                echo $word . 'w' . $_GET["suffix"] . ' ';
                                $useroutput = $word . 'w' . $_GET["suffix"] . ' ';
                                } else {
                                echo $translatedword . $word[0] . $_GET["suffix"] . ' ';
                                $useroutput = $translatedword . $word[0] . $_GET["suffix"] . ' ';
                                }
                                } else {
                                echo $word . ' ';
                                $useroutput = $word . ' ';
                                }
                            } else {
                                if (in_array($word[0], $vowels)) {
                                    echo $word . 'w' . $_GET["suffix"] . ' ';
                                    $useroutput = $word . 'w' . $_GET["suffix"] . ' ';
                                } else {
                                    echo $translatedword . $word[0] . $_GET["suffix"] . ' ';
                                    $useroutput = $translatedword . $word[0] . $_GET["suffix"] . ' ';
                                }
                            }
                    }
            }

                #Return view
                return view('piglatin.index')->with([
                    'useroutput' => $useroutput
                ]);
    }
    
    public function translate() 
    {
        return 'Translate text based on user input';
        # redirect
    }
}
