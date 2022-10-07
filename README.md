# Scraper

_Easily fetch, slice, dice, and output HTML (or XML) content from anywhere._

**A [Top Shelf Craft](https://topshelfcraft.com) creation**  
[Michael Rog](https://michaelrog.com), Proprietor


* * *


## Installation

1. From your project directory, use Composer to require the plugin package:

   ```
   composer require topshelfcraft/scraper
   ```

2. In the Control Panel, go to Settings → Plugins and click the “Install” button for Scraper.

3. There is no Step 3.

_Scraper is also available for installation via the Craft CMS Plugin Store._

## Usage

The Scraper plugin exposes a full-featured crawler object to your Twig template, allowing you to fetch, parse, and filter DOM elements from a remote source document.

### Instantiating a client

When invoking the plugin, you can choose whether to use SimpleHtmlDom or Symfony components to instantiate your crawler:

```twig
{% set crawler = craft.scraper.using('symfony').get('https://zombo.com') %}
```
```twig
{% set crawler = craft.scraper.using('simplehtmldom').get('https://zombo.com') %}
```

I generally recommend using the Symfony components; they are more powerful and resilient to malformed source code. (The SimpleHtmlDom crawler is included to provide backwards compatibility with Craft 2 projects.)

### Using the Symfony client

When you opt for Symfony components, the `get` method instantiates a full [BrowserKit](https://symfony.com/components/BrowserKit) client, giving you access to all the [BrowserKit](https://symfony.com/components/BrowserKit) and [DomCrawler](https://symfony.com/doc/current/components/dom_crawler.html) methods.

You can iterate over the DOM elements from your source document like this:

```twig
{% for node in crawler.filter('h2 > a') %}
    {{ node.text() }}
{% endfor %}
```

### Using the SimpleHtmlDom client

When you opt for the SimpleHtmlDom crawler, the `get` method instantiates a [SimpleHtmlDom](https://simplehtmldom.sourceforge.io/) client, giving you access to all the [SimpleHtmlDom methods](https://simplehtmldom.sourceforge.io/manual.htm).

You can iterate over the DOM elements from your source document like this:

```twig
{% for node in crawler.find('h1') %}
    {{ node.innertext() }}
{% endfor %}
```

### This is great! I still have questions.

Ask a question on [StackExchange](https://craftcms.stackexchange.com/), and ping me with a URL via email or Discord.


### What are the system requirements?

Craft 4.2.1+


### I found a bug.

Please open a GitHub Issue, submit a PR to the `4.x.dev` branch, or just email me.


* * *

#### Contributors:

  - Plugin development: [Michael Rog](http://michaelrog.com) / @michaelrog
  - Includes the ["Simple HTML DOM"](http://simplehtmldom.sourceforge.net/) library, created by S. C. Chen
  - Includes the Symfony [DomCrawler](https://symfony.com/doc/current/components/dom_crawler.html) via [Goutte](https://github.com/FriendsOfPHP/Goutte), created by [Fabian Potencier](http://fabien.potencier.org/) / @fabpot
  - Icon: ["Upright vacuum cleaner"](https://thenounproject.com/creaticca/collection/vacuum-cleaners-outline-collection/?i=960548) by [Creaticca Creative Agency](https://thenounproject.com/creaticca/), via [The Noun Project](https://thenounproject.com/)

