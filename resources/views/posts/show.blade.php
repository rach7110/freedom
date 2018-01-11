@extends('master')

<!-- HEADER -->
@section('title')
{{ $post->title }}
@stop

@section('title_description')
@stop

@section('content')
<div class="blog">
    <div class="row" id="banner">
    <img src="/images/week-1.jpg">
    </div>

    <div class="inset-column">
        <p>
        I decided to take on a project - where I would solve JavaScript coding challenges from codewars.com for 30 days in order to improve my programming language skills. At the end of each week, I will write about the experience: what I learned, what was difficult, what stood out. While the main purpose of this is about the programming experience, I’ll also touch on the overall experience. But first, let’s get into the technical nuts and bolts.
        </p>

        <h3>GOTCHAS</h3>

        <p>
        Using arithmetic on a variable declared as undefined.
        [I kept repeating the following and felt ridiculous about it. So I figured I should write about in order to retrain my thinking.]

        In JavaScript, and probably most languages, you cannot use arithmetic on a declared variable set as undefined. Sounds simple enough. But I kept equating undefined to zero. 

        For example, I declared a variable outside a for loop in order to set its scope. But I forgot to set it equal to zero. (Not sure why, I never make this mistake when coding in PHP. Guess learning a new language means sometimes forget the basics.)

        Example: Get the sum of two arrays...actually the sum of all their elements. Each array includes integers. Output is a single integer.
        </p>

        <pre>
        function arrayPlusArray(arr1, arr2) {
            var sum;
  
            for(var i = 0; i < arr1.length; i++) {
                sum += arr1[i];
            };

            for(var i = 0; i < arr2.length; i++) {
                sum += arr2[i];
            };
        
            return sum;
        }
        </pre>

        <p>Again, a simple one but not always intuitive when troubleshooting.</p>

        <h3>EXPERIENCE</h3>
        
        <p>Here’s something that stood out this week. Creating a project from scratch was more time consuming than expected. I assumed 1-2 hours a day of programming - so 10 hours per week at most. But I overlooked hours needed when doing something for the first time. For example:
        </p>
        <ul>
            <li>Choosing 1 language to focus on or 2 languages that compliment each other?</li>
            <li>Deciding what topics to focus on when writing this blog: built-in functions that are tricky? The gotchas (which feel like stupid mistakes, but are probably common for others)? The deeper learning topics?</li>
            <li>Designing and coding the layout for my blog.</li>
        </ul>
        <p>Any new project that is effective is going to need some brainstorming and upfront leg-work. And it is also going to require some trial and error. So keep that in mind if you decide to take on a similar ambition!</p>

        <p>I initially focused on two complimentary languages: Ruby and JavaScript. They are both in hot demand and fun to learn, so why not both? Well, for me learning a language means getting deep into it like reading the documentation and the comments from other programmers on a topic. It’s not just getting used to the syntax. However, switching between 2 languages within 30 minutes didn’t gybe well for me. After programming for one day in both, I reflected on the concepts I had learned and realized I couldn’t decipher one from the other. Was it the Ruby or JavaScript documentation that talked about class and instance variables? Prototypal inheritance takes more reading and understanding. Do I have the mental bandwidth right now to grasp it in one language AND also go read if it is concept in the other and where it differs and relates. Maybe this works for others, but I decided early that learning one language at a time is enough.</p>

        <p>So I chose JavaScript. I love Ruby and would benefit from practicing it. But my background is in PHP and I’m long overdue for a complimentary client-side scripting language. Thus, this journey will be into …...JavaScript!</p>

    </div>

</div>
@stop