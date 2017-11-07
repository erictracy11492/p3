<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Pig Latin translator</title>

      <link rel="stylesheet" type="text/css" href="css/p3.css">
      
      @stack('head')
      
  </head>
    
  <body>
      
                @if(count($errors) > 0)
                <ul>
                @foreach ($errors->all() as $error)
                    <li id="errormessage">{{ $error }}</li>
                @endforeach
                </ul>
                @endif
      
      <h1>Pig Latin translator</h1>
      
      <form method='GET' action='/'>

        <p id="directions">Type into the box below and your words will translate into Pig Latin above.</p>
          
          <!-- Input text box -->
          <h2>Type text to translate here:</h2>
          <p id="beforewarning">*REQUIRED</p>
          <textarea name="usertext" rows="6" cols="70" value='{{ $usertext or '' }}'></textarea>
          
          <p>Rules: Words that begin with a consonant shift the first letter to the end and append suffix. Words that begin with a vowel add 'way' to the end.</p>
          
          <!-- Suffix -->
          <h2>Suffix:</h2>
            <input type="radio" name="suffix" value="ay" checked> "ay"<br>
            <input type="radio" name="suffix" value="a"> "a"<br>
          
          <!--Optional rules -->
          <h2>Optional rules:</h2>
            <input type="checkbox" name="threeletter" value="yes" checked> Words that are shorter than 3 characters are unchanged (Example: "be" = "be")<br><br><br>
          
          <input id="submit" type="submit" value="Translate">
          
            <!--PHP starts -->

            <!--PHP ends -->
          
          <section>
              @yield('display')
          </section>
   
            <!-- error display -->

      </form>
      
      @stack('body')
      
  </body>
    
</html>