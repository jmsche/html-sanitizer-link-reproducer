# Reproducer for stripped href with some basic Sanitizer config

Creating a simple config seems to strip href attribute for links.

To reproduce:

```bash
git clone https://github.com/jmsche/html-sanitizer-link-reproducer.git
cd html-sanitizer-link-reproducer
symfony serve
```

And then head to the URL Symfony CLI tells you.
