# yumm

## Requirements
- WordPress 4.5 +
- PHP 5.4 +
- For additional theme development, npm and bower are required
- Compiled assets are included in the theme repo for easy installation.

###checklist

####data
blog post
- [x] title
- [x] date
- [x] content
recipe
- [x] name
- [x] author
- [x] category
- [x] the recipe itself
- [x] picture

####pages
- [x] Home page
  - [x] Simple feed of the posts and recipes in date order
    - [x] For posts show: 
      - [x] Title
      - [x] date
      - [x] short snippet.
    - [] Clicking on a post snippet expands the post inline. do better?
    - [x] Clicking on the title takes you to the post page.
    - [x] For recipes show:
      - [x] Name
      - [x] thumbnail
    - [x] List of recipe categories
- [x] Blog post
  - [x] Show all fields
- [x] Recipe
  - [x] Show all fields
  - [x] The category should be a link to the categories page
- [x] Category page
  - [x] List of recipes in that category in date order ­ Same presentation as home page
