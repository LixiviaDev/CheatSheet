{{-- 
Expected arguments:
- :type         | string    | mandatory |       | Type of the field
- :title        | string    | mandatory |       | Title of the field
- :columnName   | string    | mandatory |       | Name of the column in the database
- :currentValue | string    | optional  | ''    | Current value in the database
- :autocomplete | string    | optional  | ''    | Current value in the database
- :isRequired   | bool      | optional  | false | Is input required?
- :isAutoFocus  | bool      | optional  | false | Is input in auto focus?
- :isReadonly   | bool      | optional  | false | Is input readonly?
- :isHidden     | bool      | optional  | false | Is input hidden?
--}}

<x-input 
    :type="'password'"
    :title="$title"
    :columnName="$columnName"
    :currentValue="$currentValue ?? ''"
    :autocomplete="$autocomplete ?? ''"
    :isRequired="$isRequired ?? false"
    :isAutoFocus="$isAutoFocus ?? false"
    :isReadonly="$isReadonly ?? false"
    :isHidden="$isHidden ?? false"
/>