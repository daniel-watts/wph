# WPH - Wordpress Theme

The _Wordpress Helper Theme_ is a streamlined Wordpress theme for use on it's own or as a base for your own theme development.

## Installation

- Upload the `wph` directory and all its contents to the Wordpress theme directory `wp-content/themes`.
- Login to the Wordpress website as an admin.
- Under _Appearance_ > _Themes_ page in the Wordpress editor, activate the _WPH Theme_.

## Post and page Configurations

### Multi-Column Layouts

For each individual page or post you make, you can set the number of columns to be displayed. This is done by selecting the layout in in the post or page editors _Templates_ section.

#### Single Column Layout (Default)

Only the post content will appear on the page.

If the The _Table of Contents_ is used, the left-colum will automatically be used, but no left-column widgets will display.

#### Two Column Layout

The left-column widgets will appear in a left column.

#### Three Column Layout

The left-column widgets will appear in a left column, and the right-column widgets will appear in a right-column.

## Menues and Widgets

#### Main Menu

By default, all pages will be displayed in the main menu in the header of the website. To use a customized menu, goto the _Appearance_ > _Menues_ page in the Wordpress editor. Under _Menu structure_, press the _Create Menu_ button to make a new menu. Then, next to _Display location_ select the _Theme Main Menu_ checkbox to use the newly created menu in the main menu in the header of the website.

#### Left-Column Widgets

The "Left Column Widgets" is available in the _Appearance_ > _Widgets_ page in the Wordpress editor. Content placed in this widget will appear in a left-column on all posts and pages, but only if a "Two-Column Layout", or "Three-Column Layout" template is selected in the post or page editor.

#### Right-Column Widgets

The "Right Column Widgets" is available in the _Appearance_ > _Widgets_ page in the Wordpress editor. Content placed in this widget will appear in a right-column on all posts and pages, but only if the "Three-Column Layout" template is selected in the post or page editor.

#### Footer Widgets

coming soon.

### Page Table of Contenet

In the post or page editor, under the _Custom Fields_ section, set the custom field with the name `use_toc` and a value of `yes` to enable a Table of Contents. The able of contents will show using any layout template.










## Theme development.

### The $wph Class

The `$wph` class can be used to call methods inside template files, however, `global $wph` must be called before any `$wph` methods can be called.

Put this at the top of the template file.

```
<?php global $wph; ?>
```

Afterwords, you can call a `$wph` method in the template file like:

```
<?php $wph->pagination_bar(); ?>
```

### WPH Core Files

**style.css** - The required theme stylesheet placeholder file. No need to edit this file.

**index.php** - The required theme index file. No need to edit this file unless special route handling is needed.

**functions.php** - Like most Wordpress themes this is where the heavy lifting takes place.
WPH simplifies most tasks using the `$wph` class methods. Additional custom theme functions can be defined here as usual.

### WPH Theme Files









