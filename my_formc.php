<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title>Form</title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="2022.6">
  <style type="text/css">
    p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Times; color: #000000; -webkit-text-stroke: #000000}
    p.p2 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Times; color: #000000; -webkit-text-stroke: #000000; min-height: 14.0px}
    span.s1 {font-kerning: none}
  </style>
</head>
<body>
<p class="p1"><span class="s1">&lt;?php</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">    </span>session_start();</span></p>
<p class="p2"><span class="s1"><span class="Apple-converted-space">    </span></span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">    </span>//set session</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">    </span>if(isset($_POST["submit"])){</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">        </span>$_SESSION['NameSession']= $_POST["box"];</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">    </span>}</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">    </span>?&gt;<span class="Apple-converted-space"> </span></span></p>
<p class="p2"><span class="s1"><span class="Apple-converted-space">    </span></span></p>
<p class="p1"><span class="s1">&lt;!DOCTYPE html&gt;</span></p>
<p class="p1"><span class="s1">&lt;html lang="en"&gt;</span></p>
<p class="p1"><span class="s1">&lt;head&gt;</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">    </span>&lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">    </span>&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">    </span>&lt;title&gt;Form&lt;/title&gt;</span></p>
<p class="p1"><span class="s1">&lt;/head&gt;</span></p>
<p class="p1"><span class="s1">&lt;body&gt;</span></p>
<p class="p2"><span class="s1"><span class="Apple-converted-space">    </span></span></p>
<p class="p1"><span class="s1"><br>
</span></p>
<p class="p1"><span class="s1"><br>
</span></p>
<p class="p2"><span class="s1"><span class="Apple-converted-space">    </span></span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">     </span>//stateless handling (user input remaining in the text box)</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">    </span>&lt;form action="http://localhost/my_form.php" method="POST"&gt;</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">       </span>Name: &lt;input type="text" name="search" placeholder = "Firstname" Value="&lt;?php echo (isset($_POST['search'])) ? $_GET['box']: '';?&gt;"&gt; &lt;br&gt;</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">       </span>box: &lt;input type="text" name="box" placeholder = "Lastname" Value="&lt;?php<span class="Apple-converted-space">  </span>echo (isset($_SESSION['NameSession'])) ? $_SESSION['NameSession']: '';?&gt;"&gt;<span class="Apple-converted-space"> </span></span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">       </span>&lt;br&gt;&lt;br&gt;</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">       </span>&lt;input type="submit" name="submit"&gt;</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">       </span>&lt;form&gt;</span></p>
<p class="p1"><span class="s1"><br>
</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">       </span>&lt;?php if(isset($_GET['search']) &amp;&amp; isset($_GET['box'])): ?&gt;</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">           </span>&lt;br/&gt;</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">       </span>$name = $_GET['search'];</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">       </span>echo $name;</span></p>
<p class="p1"><span class="s1"><br>
</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">       </span>&lt;?php endif; ?&gt;</span></p>
<p class="p1"><span class="s1"><br>
</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">    </span>&lt;body&gt;</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">    </span>&lt;html&gt;</span></p>
</body>
</html>
