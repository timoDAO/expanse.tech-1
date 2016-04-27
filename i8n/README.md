# expanse.tech international language support
The www.expanse.tech website translation engine. The engine allows the user to specify a preferred language setting, and if the user specific setting is invalid or left unspecified, automatically detects the language based on the web browsers language setting. If the selected/set language is not in the valid_languages array it currently defaults to EN. 

** Current Translation Version *1.1.0* **

## Contribution Guidelines
It is encouraged for users both to create new translations for those languages not yet translated, as well as aid in the maintenance or accuracy improvement of existing translations. There is a list of existing languages currently requiring updates as well as key desired translations at the bottom of this document.

### Translation Format and File Structure
The i8n folder houses the translation engine and contains a directory of translation files for each language, each with the name of the [IETF Language Tag](https://en.wikipedia.org/wiki/IETF_language_tag) of that translation.

Each language folder contains multiple translation files for different sections or pages of the website.
**global** contains translations that are used site wide.
Currently, there are two page specific translation files: **index**, and **docs**. All pages in a translation should be fully translated before submitting the translation pull request. 

The format of language files should remain consistent. The header comments of the file should contain the language name, IETF code,  page name, and version number. The version number should only be updated when translation updates are complete. 

### Adding a New Translation
To add a new language, copy the base language folder (currently english), rename it to the IETE Language tag for the language being translated to, and translate the files contained. Please maintain the current major and minor versions, but reset the patch to 0. Please note, filenames should remain consistent and not be translated. 

### Translation Versioning
The language files make use of the semantic versioning format MAJOR.MINOR.PATCH

* **Major Versions**  include large additions, modifications, or removals that is considered critical that all languages are updated to. When major version changes are made, any language not updated to the major language should be disabled until it is. It should be attempted to have translations for existing languages prepared and ready prior to the rollout of the new changes to the website.
* **Minor Versions** include minor additions/updates or small changes to existing content. These should be non critical updates that are non critically urgent but should be updated as soon as possible.
* **Patchs** should be language specific updates, these would generally include small fixes such as fixing translation inaccuracies, spelling or grammar issues, etc. These updates do not effect other languages and there is no relation between patch version numbers between different translations. 

Best efforts should be made to ensure all translations are in sync and up to date with current major and minor versions. 

### Important Considerations 
There are several key details to be aware of when translating to ensure proper formatting: 

**HTML Structure** Some translation strings contain html tags or similar dynamic content. The formatting/position of these elements must be maintained. These will eventually be updated with a more dynamic templating schema so it will not be present in the strings, however in the mean time please exercise care to maintain them.

**Special Characters** Some characters such as ' and \ have special meaning, to be used literally they must be escaped with a backslash ```\```. For example, ```don't toggle``` should be represented with ```don\'t toggle```. Or, ```45\90``` should be represented with ```45\\90```. These characters are escaped in current translations, so be sure to keep them escaped while translating, or add the escapes anywhere apostrophe or backslashes are being used in new content. 

**HTML Entities** Reserved HTML Characters should be replaced with their htmlencoded equivalents, for example:
The ampersand ```&``` should be represented with ```&amp```.

## Contributors:
* **i8n Implementation**: Daniel Conway
* **English Translation**: Sandro Ieva, Daniel Conway
* **French Translation**: Timothée Gimbert

## Top Translations Needed:
* Chinese
* Russian
* Japanese
