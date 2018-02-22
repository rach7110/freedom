@extends('posts.show')


@section('post-content')
<div class="blog">
    <div class="row" id="banner">
    <img src="/images/week-2.jpg">
    </div>

    <div class="inset-column">
        <p>
        This was my 2nd week of the 30 day programming challenge. I’m still at level 8 (the easiest and most fundamental code challenges) and will explain why I decided to stay at this level for a bit longer. I will also share some thoughts on using objects to check conditions. And I try to debunk the infamous null vs undefined question.  
        </p>

        <h3><strong>STOOD OUT</strong></h3>
        <p><em>Make use of objects when checking conditions.</em></p>

        <p>This code challenge stood out ot me because it seems like such a wonderful tool. Let’s say you are writing a function that needs to check for a value and return something  linked to it. Such as with a list of state abbreviations: you have the abbreviation and want its full name returned. Or a deck of cards: you have a card’s suit as a symbol and want to look-up the name of its suit.</p>

        <p>Let’s look at the card suit example. At first, I used if-statements to solve this challenge. Which worked, but it wasn’t the cleanest looking.</p>

        <p><em><strong>Problem</strong></em></p>
        <p>You get any card from a deck. Your task is to write a function that returns the suit name of this card.</p>

        <p><em><strong>Example Input/Output:</strong></em></p>

        <pre>
            ('3♣') -> returns 'clubs'
            ('3♦') -> returns 'diamonds'
            ('3♥') -> returns 'hearts'
            ('3♠') -> returns 'spades'
        </pre>

        <p><em><strong>Solution 1</strong></em></p>

        <pre>
            function defineSuit(card) {
                var suit = card.substr(-1);
              
                if(suit === '♣') {
                    return 'clubs';
                }
              
                if(suit === '♦') {
                    return 'diamonds';
                }

                if(suit === '♥') {
                    return 'hearts';
                }

                if(suit === '♠') {
                    return 'spades';
                }
            }
        </pre>

        <p>First, I get the last character of the string argument with the <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/substr" target="_blank">substr()</a> method and set it to the variable ‘suit’. Then I check the suit’s name by writing a series of if-statements. Simple, but a little verbose.</p>

        <p>What if, instead, I were to create an object and use its property accessor to find the name of the suit? Let’s rewrite the code now with an object...</p>

        <p><em><strong>Solution 2</strong></em></p>

        <pre>
            function defineSuit(card) {
                var suit = card.substr(-1);

                suits = {
                    '♣' : 'clubs',
                    '♠' : 'spades',
                    '♦' : 'diamonds',
                    '♥' : 'hearts'
                };

                return suits[suit];  //uses ‘bracket notation’ of the property accessor.
            }
        </pre>
        
        <p>Again, I first get the card’s suit and assign it to a variable, ‘suit’. Then I create a library (or we could call it a map, dictionary, hash, etc.) that I will use to look up the character and determine the suit’s name. This ‘library’ is the basis of an <a href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Objects/Basics" target="_blank">object</a> in JavaScript.</p>

        <p>Doesn’t this code look easier to read, extend, and maintain?</p>

        <p>In summary, it wasn’t intuitive to create an object when needing to check multiple condition statements. But it looks so much better when you do. A good way to practice implementing this would be to ask, “Do I need to ‘lookup’ a value?”</p>


        
        <h3><strong>EXPERIENCE</strong></h3>

        <p>This week I started feeling overwhelmed by how much there is to learn. And also felt behind the curve. A contact from a company I applied to invited me to complete a code challenge to assess my skills. (This is pretty common for programming interviews as a first step in the hiring process.) I accepted but got stuck on a JavaScript problem involving event handlers. It felt like there are many core language features that I still need to freshen up on. And it didn’t make me feel good.</p>

        <p>But I reminded myself of a few things. One was what a coding teacher and a mentor have told me in the past. There will always be people who know more than you. Even if you are a rockstar programmer with 15 years of experience. So don’t beat yourself up, it just is this way. Also, I reminded myself that I am taking on a challenge. It always feels crummy when you’re at the beginning of something but you want to be at the top. Remember, it’s a journey and perseverance will take you places.</p>

        <p>I also wanted to jump up a level in <a href="http://codewars.com" target="_balnk">Code Wars</a> But after this week’s coding challenges, I’ve decided to stick with stick with Level 8. I think I’m capable of  more difficult problems, but I noticed something. I don’t feel like enough core functions are in my mental toolbox yet. (ie: split(), join(), sort()). And I want it to be intuitive to jump to these tools before moving forward.</p>










@stop