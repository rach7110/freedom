@extends('master')

<!-- HEADER -->
@section('title')
Resume
@stop

@section('title_description')
@stop

@section('content')
<hr>
<h3>OBJECTIVE & SUMMARY</h3>
<hr>
<h4>
    A problem‐solver who prioritizes the needs of the business while always thinking of the end users. Experience working in Web Development, Sales, Project Engineering, and Manufacturing Quality Assurance roles. Passionate about entrepreneurship, technology, and quality. Seeking a company that challenges me wile supporting my skill growth.
</h4>

<hr>
<h3>COMPUTER TECHNOLOGIES</h3>
<hr>
<div class="row">
    <div class="col-md-4">
        <ul>
            <li>PHP</li>
            <li>Ruby (basic)</li>
            <li>Laravel</li>
            <li>JavaScript</li>
            <li>JQuery</li>
            <li>HTML, CSS</li>
            <li>Bootstrap, Foundation</li>
        </ul>
    </div>

    <div class="col-md-4">
        <ul>
            <li>SQLite, MySQL</li>
            <li>Command Line Interface</li>
            <li>Sublime, Jetbrains, VIM</li>
            <li>OSX, Linux, Windows</li>
            <li>Git</li>
        </ul>
    </div>
</div>

<hr>
<h3>PROFESSIONAL EXPERIENCE</h3>
<hr>
<!-- ******************************************************** -->
<!-- **********************JOBS****************************** -->
<!-- ******************************************************** -->
<div class="row resume-title">
    <div class="col-md-7">
        <p class="resume-subtitle">Web Developer / Customer Service Rep</p>
    </div>
        <div class="col-md-5">
        <p class="dates">April 2014 - present</p>
    </div>
</div>
<!-- **********************JOB************************* -->
<div class="row resume-title">
    <div class="col-md-7">
        <p class="company-name">Regatta Network</p>
    </div>
        <div class="col-md-5">
        <p class="company-location">San Marcos, TX</p>
    </div>
</div>
<div class="job-description">
    <ul>
        <li>Modify company's legacy product written in PHP</li>
        <li>Use Laravel, an MVC framework for PHP,  to build out a new web application</li>
        <li>Design and code new features using PHP, HTML, CSS, JavaScript and jQuery</li>
        <li>Use Git for version control</li>
        <li>Work with databases, MySQL and SQLite</li>
        <li>Setup different environment configurations for development and production</li>
        <li>Connect to a Rackspace Linux server via ssh and pull new features to the production server</li>
        <li>Review error logs for troubleshooting</li>
        <li>Provide product support to users</li>
    </ul>
</div>
<!-- ********************** JOB ************************* -->
<div class="row resume-title">
    <div class="col-md-7">
        <p class="resume-subtitle">Business Developer</p>
    </div>
        <div class="col-md-5">
        <p class="dates">June 2011 – Mar 2014</p>
    </div>
</div>
<div class="row resume-title">
    <div class="col-md-7">
        <p class="company-name">Greenergy Engineering</p>
    </div>
        <div class="col-md-5">
        <p class="company-location">Austin, TX</p>
    </div>
</div>
<div class="job-description">
    <ul>
        <li>Oversaw sales, marketing, administration, accounting, and engineering of a new business segment</li>
        <li>Generated leads through trade shows, on-line marketing campaigns, and cold calling</li>
        <li>Created digital marketing material and managed website content using Joomla CMS</li>
        <li>Interviewed and trained new employees</li>
    </ul>
</div>
<!-- ********************** JOB ************************* -->
<div class="row resume-title">
    <div class="col-md-7">
        <p class="resume-subtitle">Project Engineer</p>
    </div>
        <div class="col-md-5">
        <p class="dates">Sept 2008 – Aug 2010</p>
    </div>
</div>
<div class="row resume-title">
    <div class="col-md-7">
        <p class="company-name">Invenergy</p>
    </div>
        <div class="col-md-5">
        <p class="company-location">Chicago, IL</p>
    </div>
</div>
<div class="job-description">
    <ul>
        <li>Led vendor evaluation strategy for business partnership that resulted in a long-term contract for repair
            of assets valued at $10MM</li>
        <li>Managed third party vendor reports</li>
        <li>Maintained database of wind anemometer readings for over 200 sites</li>
        <li>Compiled, validated, and interpolated raw data for software inputs (over 250,000 rows)</li>
        <li>Utilized purchased software to calculate energy production of wind farms for financial inputs</li>
        <li>Oversaw monthly operation reports to inform Management and outside Lenders on asset performance and
            reliability</li>
        <li>Initiated failure tracking metrics to bridge Corporate Engineering and operational sites</li>
        <li>Company representative for a Collaborative with the US National Renewable Energy Lab (NREL)</li>
        <li>Helped structure a growing engineering department by creating internal project databases, documenting work instructions, and training new Engineers</li>

    </ul>
</div>
<!-- ********************** JOB ************************* -->
<div class="row resume-title">
    <div class="col-md-7">
        <p class="resume-subtitle">Supplier Quality Engineer</p>
    </div>
        <div class="col-md-5">
        <p class="dates">March 2007 – Aug 2008</p>
    </div>
</div>
<div class="row resume-title">
    <div class="col-md-7">
        <p class="company-name">Clipper Windpower</p>
    </div>
        <div class="col-md-5">
        <p class="company-location">Cicero, IL</p>
    </div>
</div>
<div class="job-description">
    <ul>
        <li>Managed supplier acceptance process for large manufactured components</li>
        <li>Participated in root cause analysis to determine failure of vendor parts valued at over $65 MM</li>
        <li>Audited vendor inventory on-site for Purchasing and Accounting</li>
        <li>Monitored product quality using statistical process control software</li>
        <li>Created metrics and reported to management on supplier delivery and quality</li>
    </ul>
</div>
<!-- **********************JOB************************* -->
<div class="row resume-title">
    <div class="col-md-7">
        <p class="resume-subtitle">Product Specialist</p>
    </div>
        <div class="col-md-5">
        <p class="dates">Sept 2005 – March 2007</p>
    </div>
</div>
<div class="row resume-title">
    <div class="col-md-7">
        <p class="company-name">ITT Bell & Gossett </p>
    </div>
        <div class="col-md-5">
        <p class="company-location">Morton Grove, IL</p>
    </div>
</div>
<div class="job-description">
    <ul>
        <li>Provided product technical support for customers and Sales Representatives</li>
        <li>Researched current market trends for new product implementation</li>
        <li>Created special quotations for custom products</li>
        <li>Performed monthly audits on manufacturing cells</li>
    </ul>
</div>
<!-- ******************************************************** -->
<!-- **********************EDUCATION************************* -->
<!-- ******************************************************** -->
<hr>
<h3>EDUCATION</h3>
<hr>
<div class="education">
    <div class="row resume-title">
        <div class="col-md-7">
            <p class="resume-subtitle">Bachelor of Science: Mechanical Engineering</p>
        </div>
            <div class="col-md-5">
            <p class="dates">Aug 1998 - December 2002</p>
        </div>
    </div>

    <div class="row resume-title">
        <div class="col-md-7">
            <p>Minor: French Language</p>
        </div>
    </div>
    <div class="row resume-title">
        <div class="col-md-7">
            <p>University of Colorado, Boulder, CO</p>
        </div>
    </div>
</div>
<!-- ******************************************************** -->
<!-- **********************TRAINING************************* -->
<!-- ******************************************************** -->
<hr>
<h3>TRAINING</h3>
<hr>
<!-- **********************TRAINING************************* -->
<div class="education">
    <div class="row resume-title">
        <div class="col-md-7">
            <p class="resume-subtitle">Introduction to Linux</p>
        </div>
            <div class="col-md-5">
            <p class="dates">August 2015</p>
        </div>
    </div>

    <div class="row resume-title">
        <div class="col-md-7">
            <p>Linux Foundation</p>
        </div>
    </div>
</div>
<!-- **********************TRAINING************************* -->
<div class="education">

    <div class="row resume-title">
        <div class="col-md-7">
            <p class="resume-subtitle">Continuing Education, Web Development</p>
        </div>
            <div class="col-md-5">
            <p class="dates">June - August 2013</p>
        </div>
    </div>
    <div class="row resume-title">
        <div class="col-md-7">
            <p>MakerSquare,  Austin, TX</p>
        </div>
    </div>
</div>
<!-- **********************TRAINING************************* -->
<div class="education">
    <div class="row resume-title">
        <div class="col-md-7">
            <p class="resume-subtitle">Business and Entrepreneurship Courses</p>
        </div>
            <div class="col-md-5">
            <p class="dates">May 2010 – Dec 2010</p>
        </div>
    </div>
    <div class="row resume-title">
        <div class="col-md-7">
            <p>Acton MBA in Entrepreneurship  Austin, TX </p>
        </div>
    </div>
</div>
<!-- ******************************************************** -->
<!-- **********************OTHER***************************** -->
<!-- ******************************************************** -->
<hr>
<h3>OTHER</h3>
<hr>
<div class="row">
    <p class="resume-subtitle">Membership & Volunteering</p>
    <ul>
        <li>Volunteer Instructor, Austin Yacht Club Women’s Sailing Clinic, 2012 - Present</li>
        <li>Member, Sierra Club Austin Chapter, 2011- 2014
        <li>Volunteer, Austin Rails Girls 2013</li>
        <li>Volunteer, RISE Week 2011</li>
        <li>Volunteer, GirlStart: Girls in STEM Conference 2011</li>
        <li>Volunteer, Austin Startup Bazaar 2011</li>
        <li>Member, Women of Wind Energy, 2008-2011</li>
        <li>Member, Engineers Without Borders, 2005 – 2010</li>
        <li>Volunteer, Cabrini Green Tutor Center, 2009-2010</li>
    </ul>
</div>
<div class="row">
    <p class="resume-subtitle">Foreign Languages</p>
        <ul>
            <li>Portuguese (fluent)</li>
            <li>French (intermediate)</li>
            <li>Spanish (basic)</li>

        </ul>
</div>

@stop
