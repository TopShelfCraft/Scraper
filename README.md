# Scraper

_Easily fetch, slice, dice, and output HTML content from remote pages._

**Lovingly crafted by [Top Shelf Craft](https://topshelfcraft.com)**  
[Michael Rog](https://michaelrog.com), Proprietor

* * *


## tl;dr

**Scraper** allows you to easily fetch HTML content from any URL, create a DOM with it, select elements by CSS selector, find and manipulate DOM nodes, and save or output them using the power of Twig templates.


## Usage

Use **Scraper** to query content from remote URLs, select it by HTML and CSS selector, and output it in your Craft templates.

For example:

    {% set acmeContent = craft.scraper.get("http://acmewidgets.com") %}
    {% for widgets in acmeContent.find(".widget") %}
	        <div>{{ widget.innerText }}</div>
    {% endfor %}

or...

    {% set google = craft.scraper.get("http://google.com") %}
    {% for link in google.find("a") %}
        <li>{{ link.attr.href }}</li>
    {% endfor% }


### What are the system requirements?

Craft 2.5+ and PHP 5.4+


### I found a bug.

Nah...


### I triple-checked. It's a bug.

Well, alright. Please open a GitHub Issue, submit a PR to the `dev` branch, or just email me to let me know.


* * *

#### Contributors:

 - Plugin development: [Michael Rog](http://michaelrog.com) / @michaelrog
 - [Simple HTML DOM](http://simplehtmldom.sourceforge.net/): created by S. C. Chen
