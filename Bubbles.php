<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"></meta>
        <title>Bubbles</title>
        <link rel="stylesheet" href="..\..\CSS\css.css"></link>
    </head>
    <style>
        canvas{
            border: 1px solid black;
            margin: 10px;
        }

        body{
            margin : 0;
        }

    </style>
    <body>
        <h1>
            Bubbles
        </h1>
        <div>
            <?php include '..\..\menu.php'; ?>
        </div>
        <canvas>

        </canvas>
        <script src="canvas.js"></script>

        <div class="review">
            <h2>Code Review</h2>
            <h3>Sources:<br /><a href="https://www.youtube.com/watch?v=EO6OkltgudE">HTML5 Canvas Tutorial for Beginners</a></h3>
            <div class="explanation">
                <h3>Concepts:</h3>
                <h4>Accessing the HTML5 canvas using javascript</h4>
                <h4>Drawing basic shapes to the canvas</h4>
                <h4>Using "Math.random() - 0.5" to get a random value between -0.5 and 0.5</h4>

<pre style="color:#000000;background:#ffffff;"><span style="color:#808030; ">(</span><span style="color:#797997; ">Math</span><span style="color:#808030; ">.</span><span style="color:#800000; font-weight:bold; ">random</span><span style="color:#808030; ">(</span><span style="color:#808030; ">)</span> <span style="color:#808030; ">-</span> <span style="color:#008000; ">0.5</span><span style="color:#808030; ">)</span> <span style="color:#808030; ">*</span> <span style="color:#008c00; ">10</span>
</pre>

                <p>This value can be multiplied by X number to get a value between -x/2 and x/2<br />
                E.G. "(Math.random() - 0.5) * 10" gives us a value between -5 and 5. In the above example, this technique is used to generating a random X velocity and Y velocity.</p>
                <h4>Animating the Canvas</h4>
                <pre style='color:#000000;background:#ffffff;'>animate<span style='color:#808030; '>(</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
<span style='color:#800000; font-weight:bold; '>function</span> animate<span style='color:#808030; '>(</span><span style='color:#808030; '>)</span><span style='color:#800080; '>{</span>
    context<span style='color:#808030; '>.</span>clearRect<span style='color:#808030; '>(</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>,</span> <span style='color:#008c00; '>0</span><span style='color:#808030; '>,</span> canvas<span style='color:#808030; '>.</span>width<span style='color:#808030; '>,</span> canvas<span style='color:#808030; '>.</span>height<span style='color:#808030; '>)</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>// clears the canvas</span>

    requestAnimationFrame<span style='color:#808030; '>(</span>animate<span style='color:#808030; '>)</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>// Recursively calls this function</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2019-01-09 23:46:11 UTC -->
                <h4>Classes in Javascript</h4>

<pre style="color:#000000;background:#ffffff;"><span style="color:#800000; font-weight:bold; ">function</span> ClassName<span style="color:#808030; ">(</span>par1<span style="color:#808030; ">,</span> par2<span style="color:#808030; ">)</span><span style="color:#800080; ">{</span> <span style="color:#696969; ">// Parameters don't need a type declaration</span>
    <span style="color:#800000; font-weight:bold; ">this</span><span style="color:#808030; ">.</span>variable<span style="color:#800080; ">;</span> <span style="color:#696969; ">// Class level variable</span>

    <span style="color:#800000; font-weight:bold; ">this</span><span style="color:#808030; ">.</span>Method <span style="color:#808030; ">=</span> <span style="color:#800000; font-weight:bold; ">function</span><span style="color:#808030; ">(</span><span style="color:#808030; ">)</span><span style="color:#800080; ">{</span> <span style="color:#696969; ">// Creates a public method using a javascript anonymous function</span>
        <span style="color:#696969; ">// Code goes here</span>
    <span style="color:#800080; ">}</span>
<span style="color:#800080; ">}</span>
</pre>

            </div>
        </div>
        
    </body>
</html>