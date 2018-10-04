@extends('posts.show')


@section('post-content')
<div class="blog">
    <div class="row" id="banner">
    <img src="/images/week-3.jpg">
    </div>

    <div class="inset-column">
        <h3><strong>INTRODUCTION</strong></h3>

        <p>
        Lorem Ipsum
        </p>

        <h3><strong>STOOD OUT</strong></h3>
        <p><em>Understanding the reduce() method.</em></p>

        <p>The reduce method is handy for applying some logic on each value in an array and then ‘reducing’ the array to a single value. The reduce method takes two arguments: a callback function and an optional initial value. Let’s look at an example:</p>

        <p><em><strong>Problem</strong></em></p>
        <p>Write a function that takes a string, which has integers inside of it separated by spaces, and returns the sum.</p>

        <p><em><strong>Example Input/Output:</strong></em></p>

        <pre>
        summy("1 2 3")  ==> 6
        </pre>

        <p><em><strong>Solution</strong></em></p>

        <pre>
        function summy(stringOfInts){
            var strings = stringOfInts.split(" ");
            
            return total = strings.reduce(function(acc, cur) {
                    return parseInt(acc) + parseInt(cur);
            });
        }
        </pre>

        <p>First, I convert the string of integers into an array of integer-strings. Then I use the reduce method to convert this array to a single value. But how? </p>

        <p>The reduce method takes two parameters:</p>
        <ol>
            <li>callback</li>
            <li>initialValue [optional]</li>
        </ol>

        <p>We are not using the optional initialValue argument yet. So the first (and only) parameter in the reduce method is a callback function. Not to confuse you further, but this callback takes four more arguments, two of which are required. I will not be going over the optional arguments in the callback. But if you want to understand them further, I suggest looking at the Mozilla documentation on the <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/Reduce " target="_blank">reduce()</a> method.</p>

        <ol>
            <li>accumulator</li>
            <li>currentValue</li>
            <li>currentIndex [optional]</li>
            <li>array [optional]</li>
        </ol>

        <p></p>

        <p>So the two required arguments in our callback are an accumulator and a current value. What are those and what are we doing with them? Well, if we segment our callback, you can see it’s just a simple function that takes two arguments:</p>

        <pre>
        function(acc, cur) {
            return parseInt(acc) + parseInt(cur);
        }
        </pre>

        <p>Basically, I convert the two arguments to integers (remember they were strings in our array?) And then add them and return the value. Simple!</p>
        
        <p>But what’s nice about the reduce method is that it will apply this function to every value in the array. So how does that work? Well, according to the documentation (when no initialValue is provided): </p>
        
        <blockquote>...the accumulator will be equal to the first value in the array, and currentValue will be equal to the second.</blockquote>

        <p>On its first run of the callback, it sets the acc and cur variables as described above. It stores the return value in memory as the accumulator and then runs again and again until current value is the last value in the array. But don’t forget the return statement inside the callback! Otherwise the accumulator will be set to undefined after the first run. As seen below:</p>

        <p><em><strong>Wrong</strong></em></p>

        <pre>
        return total = strings.reduce(function(acc, cur) {
            parseInt(acc) + parseInt(cur);
        }); 

        // undefined
        </pre>
        <p>The above returns undefined because the accumulator is undefined after the first run.</p>


        <p><em><strong>Right</strong></em></p>

        <pre>
        return total = strings.reduce(function(acc, cur) {
            <span style="color: violet;">return</span> parseInt(acc) + parseInt(cur);
        }); 
        </pre>
        <p>The above returns the sum of numbers because the accumulator is returned after each run of the callback.</p>

        <p></p>
        <p></p>
        <p></p>


        
        
        <h3><strong>EXPERIENCE</strong></h3>

        <p></p>

        <p></p>

        <p></p>










@stop