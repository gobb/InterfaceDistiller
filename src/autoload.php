<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart 
// this is an autogenerated file - do not edit
spl_autoload_register(
   function($class) {
      static $classes = null;
      if ($classes === null) {
         $classes = array(
            'com\\github\\gooh\\interfacedistiller\\distillate' => '/Distillate/Distillate.php',
            'com\\github\\gooh\\interfacedistiller\\distillate\\accessors' => '/Distillate/Accessors.php',
            'com\\github\\gooh\\interfacedistiller\\distillate\\mutators' => '/Distillate/Mutators.php',
            'com\\github\\gooh\\interfacedistiller\\distillate\\writer' => '/Distillate/Writer.php',
            'com\\github\\gooh\\interfacedistiller\\filters\\noimplementedmethodsiterator' => '/Filters/NoImplementedMethodsIterator.php',
            'com\\github\\gooh\\interfacedistiller\\filters\\noinheritedmethodsiterator' => '/Filters/NoInheritedMethodsIterator.php',
            'com\\github\\gooh\\interfacedistiller\\filters\\nomagicmethodsiterator' => '/Filters/NoMagicMethodsIterator.php',
            'com\\github\\gooh\\interfacedistiller\\filters\\nooldstyleconstructoriterator' => '/Filters/NoOldStyleConstructorIterator.php',
            'com\\github\\gooh\\interfacedistiller\\filters\\notraitmethodsiterator' => '/Filters/NoTraitMethodsIterator.php',
            'com\\github\\gooh\\interfacedistiller\\filters\\regexmethoditerator' => '/Filters/RegexMethodIterator.php',
            'com\\github\\gooh\\interfacedistiller\\interfacedistiller' => '/InterfaceDistiller.php'
          );
      }
      $cn = strtolower($class);
      if (isset($classes[$cn])) {
         require __DIR__ . $classes[$cn];
      }
   }
);
// @codeCoverageIgnoreEnd
