# Snow.ly

Snowly is a simple CMS built using Laravel & Vue.js.

Snowly was (at first) created for my friends who needed a quick website that would allow them to post their thoughts, write articles, tell a little bit about themselves, get in contact with and show-off projects - this is why Snowly supplies you with a Blog, Articles, Projects (fetched from github), About and Contact page right out of the box.

While the whole system isn't very robust, it was more of a learning experience for me, but since my friends really enjoyed the outcome and use it on a daily basis - I've decided to release it to the public.

## Bugs and planned improvements

- Fix HTML Editor not scoping the style properly
- Add support for Sharex uploads
- Allow setting up webhooks for Projects rather than manual fetch

## Which pages are covered
### Landing page
Snowly comes with a simple landing page to make it loook more prestigious than it really is /wink wink/
![https://i.imgur.com/5tzz1wa.jpg](https://i.imgur.com/5tzz1wa.jpg)

### Blog page
The blog page is structured very simply: the left side contains posts, the right side contains sorting options.
All posts have a link attached to them, so you can link people directly to the post (considering all the posts are on the same page); other than that - footer contains date and tags that improve how search service works on the website.
![https://i.imgur.com/fmgcvJe.jpg](https://i.imgur.com/fmgcvJe.jpg)

### Articles page
The articles page is cut into a grid, you can easily find what you are looking for thanks to the filtering and sorting options.
![https://i.imgur.com/mltrbbC.jpg](https://i.imgur.com/mltrbbC.jpg)
![https://i.imgur.com/xPioYe8.jpg](https://i.imgur.com/xPioYe8.jpg)

### Projects page
The projects page is very simple - it fetches projects directly from github using API and your username.
![https://i.imgur.com/uLXAxtf.jpg](https://i.imgur.com/uLXAxtf.jpg)

### About page
The about page consists of a side-menu that'll help readers navigate through the page, the header containing your avatar and name, the content section that is fully editable to suit your needs.
![https://i.imgur.com/w2tNFts.jpg](https://i.imgur.com/w2tNFts.jpg)

### Error pages
Two error pages are styled in Snowly - 404 and 403, but if you want to add more you can just copy-paste them, rename them and edit the contents - it's that simple!

### Contact page
It's just a simple form connected to the admin panel - all messages sent through it are stored in the database and browsable through the admin panel.

### Admin panel
The admin panel is a simple panel containing forms for creation and management of resources, aswell as a HTML editor with a live preview that can be used for these resources or the about page.

It also has a tab for edition of settings and a tab to fetch and update projects directly from github.
