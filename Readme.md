-----------------------
OS Neos Bootstrap Theme
-----------------------

This is a Neos - Application Package

Includes:

- Bootstrap 3 | NodeTypes
- Bootstrap 3 | Grids
- Bootstrap 3 | Resources


- Font Awesome Icons | DataSource - NodeTypeMixin - SelectBoxEditor
- Font Awesome Icons | Resources


- jQuery | Resource


- Animate.css | DataSource - NodeTypeMixin - SelectBoxEditor
- Animate.css | Resource

Quickstart
----------------------

Copy to composer.json
```
      "repositories": [
            { "type": "git", "url": "git@github.com:oliver582/OS.Neos.BootstrapTheme.git" }
          ],
```   

Composer command
```
      composer require "os/neos-bootstraptheme:dev-master“
```

Copy sample files to your clean Site Package
```
      Resources/Private/Templates/Page/Default.html
      Resources/Private/Templates/TypoScriptObjects/Menu.html
      Resources/Private/TypoScript/Documents/DefaultPage.ts2
      Resources/Private/TypoScript/Root.ts2
```

Change in Default.html all "Vendor.Site" to your Site Package Name
```
      Resources/Private/Templates/Page/Default.html
```
    





