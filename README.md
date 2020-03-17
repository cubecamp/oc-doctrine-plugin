# oc-doctrine-plugin

This plugin is for fixing the issues with timestamp and quoted nulls in builder plugin (after migration).

Most popular error:

> Unknown column type "timestamp" requested. Any Doctrine type that you use has to be registered with \Doctrine\DBAL\Types\Type::addType(). You can get a list of all the known types with \Doctrine\DBAL\Types\Type::getTypesMap(). > If this error occurs during database introspection then you might have forgot to register all database types for a Doctrine Type. 
> Use AbstractPlatform#registerDoctrineTypeMapping() or have your custom types implement Type#getMappedDatabaseTypes().

or:

> Unknown column type "double" requested. Any Doctrine type that you use has to be registered with \Doctrine\DBAL\Types\Type::addType(). You can get a list of all the known types with \Doctrine\DBAL\Types\Type::getTypesMap(). > If this error occurs during database introspection then you might have forgot to register all database types for a Doctrine Type. 
> Use AbstractPlatform#registerDoctrineTypeMapping() or have your custom types implement Type#getMappedDatabaseTypes().
