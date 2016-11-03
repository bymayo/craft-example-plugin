# Example Plugin

This is an example plugin for Craft CMS (https://craftcms.com) to show how Models, Records, Services & Variables work within a plugin. Created as a demo for Craft CMS Manchester #4 (http://craftcmsmanchester.co.uk)

It simply saves the 'Recently Viewed' entries to the database, then allows you to output these.

## Usage

### Save Viewed Entry

```
{{ craft.exampleplugin.saveViewedEntry(entry.id) }}
```

### View Saved Entries

```
{% for entry in craft.examplePlugin.getViewedEntries() %}
	{{ craft.entries.id(entry.entryId).first() }}
{% endfor %}
```