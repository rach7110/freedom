@extends('posts.show')


@section('post-content')
<div class="blog">
    <div class="row" id="banner">
    <img src="/images/week-1.jpg">
    </div>

    <div class="inset-column">
        <p>
        I decided to take on a project - where I would solve JavaScript coding challenges from codewars.com for 30 days in order to improve my programming language skills. At the end of each week, I will write about the experience: what I learned, what was difficult, what stood out. While the main purpose of this is about the programming experience, I’ll also touch on the overall experience. Now, let’s get into some of the technical nuts and bolts.
        </p>

        <h3>GOTCHAS</h3>

        <p>Trying to use arithmetic on a variable that is undefined.</p>
        <p>In JavaScript, and probably many languages, you cannot use arithmetic on a declared variable set to undefined. Sounds simple enough. But in my mind, I kept equating undefined to zero. For example, I first declare a variable outside a for-loop in order to set its scope. But I didn't set it to any value.</p>
        <p><em>Example:</em> Get the sum of two arrays (as in the sum of all their elements.) Each array only includes integers. Output is a single integer.</p>

        <p><em><strong>Incorrect</strong></em></p>
        <pre>
        function arrayPlusArray(arr1, arr2) {
            var sum;<span style="color: red;">    //Did not set sum to any value.</span>
  
            for(var i = 0; i < arr1.length; i++) {
                sum += arr1[i];
            };

            for(var i = 0; i < arr2.length; i++) {
                sum += arr2[i];
            };
        
            return sum;
        }
        </pre>

        <p><em><strong>Correct</strong></em></p>

        <pre>
        function arrayPlusArray(arr1, arr2) {
            var sum = 0;<span style="color: violet;">     //Inital value for sum is set.</span>
  
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
        
        <p>Here’s something that stood out this week. Creating a project from scratch was more time consuming than expected. I assumed 1-2 hours a day of programming or 10 hours per week at most. But I overlooked hours needed when doing something for the first time. For example:
        </p>
        <ul>
            <li>Designing and coding the layout for my blog.</li>
            <li>Deciding what topics to focus on when writing this blog: built-in language functions that are tricky? The gotchas? The deeper learning topics?</li>
            <li>Choosing 1 language to focus on or 2 languages that compliment each other?</li>
        </ul>

        <p>I actually started by focusing on two complimentary languages: Ruby and JavaScript. They are both in hot demand and fun to learn, so why not both?</p>
        <p>But switching between 2 languages every 30 minutes didn’t gybe well for me. After programming for one day, I reflected on the concepts I had practiced and realized I couldn’t decipher one from the other. Was it the Ruby or JavaScript documentation that talked about class and instance variables? What about prototypal inheritance? That alone is a topic that is going to require some brain power in the beginning. Do I have the mental bandwidth right now to FIRST: grasp it in one language, THEN: read if it is a concept in the other language, THEN: determine how they differ and relate. Maybe this works for others, but I decided early that learning one language at a time is enough for me.</p>

        <p>So I chose JavaScript. I love Ruby and would benefit from practicing it. But my background is in PHP and I’m long overdue for a complimentary client-side scripting language. Thus, this journey will be into …...JavaScript!</p>

        <p>Lastly, any new project that is effective is going to need some brainstorming and upfront leg-work. And it is also going to require some trial and error. So keep that in mind if you decide to take on a similar ambition!</p>

    </div>

</div>
@stop