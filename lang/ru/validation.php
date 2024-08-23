<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Атрибут: должен быть принят.',
    'active_url' => 'Атрибут: не является допустимым URL.',
    'after' => 'Атрибут: должен быть датой после: date.',
    'after_or_equal' => 'Атрибут: должен быть датой после или равной дате.',
    'alpha' => 'Атрибут: может содержать только буквы.',
    'alpha_dash' => 'Атрибут: может содержать только буквы, цифры, тире и подчеркивания.',
    'alpha_num' => 'Атрибут: может содержать только буквы и цифры.',
    'array' => 'Атрибут: должен быть массивом.',
    'before' => 'Атрибут: должен быть датой перед: date.',
    'before_or_equal' => 'Атрибут: должен быть датой до или равной дате.',
    'between' => [
        'numeric' => 'Атрибут: должен находиться в диапазоне от: min до: max.',
        'file' => 'Атрибут: должен находиться в диапазоне от: min до: max килобайт.',
        'string' => 'Атрибут: должен содержать символы: min и: max.',
        'array' => 'Атрибут: должен содержать от: min до: max элементов.',
    ],
    'boolean' => 'Поле: attribute должно быть истинным или ложным.',
    'confirmed' => 'Подтверждение: attribute не совпадает.',
    'current_password' => 'Пароль неверен.',
    'date' => 'Атрибут: не является допустимой датой.',
    'date_equals' => 'Атрибут: должен быть датой, равной: date.',
    'date_format' => 'Атрибут: не соответствует формату: формат.',
    'different' => 'Атрибут: и: другое должны быть разными.',
    'digits' => 'Атрибут: должен быть: цифры цифры.',
    'digits_between' => 'Атрибут: должен быть между: min и: max цифрами.',
    'dimensions' => 'Атрибут: имеет недопустимые размеры изображения.',
    'distinct' => 'Поле: attribute имеет повторяющееся значение.',
    'email' => 'Атрибут: должен быть действующим адресом электронной почты.',
    'ends_with' => 'Атрибут: должен заканчиваться одним из следующих:: значений.',
    'exists' => 'Атрибут selected: недействителен.',
    'file' => 'Атрибут: должен быть файлом.',
    'filled' => 'Поле: attribute должно иметь значение.',
    'gt' => [
        'numeric' => 'Атрибут: должен быть больше, чем: значение.',
        'file' => 'Атрибут: должен быть больше: value в килобайтах.',
        'string' => 'Атрибут: должен быть больше, чем: значение символов.',
        'array' => 'Атрибут: должен содержать более: значений.',
    ],
    'gte' => [
        'numeric' => 'Атрибут: должен быть больше или равен: value.',
        'file' => 'Атрибут: должен быть больше или равен: значение в килобайтах.',
        'string' => 'Атрибут: должен быть больше или равен символу: значение.',
        'array' => 'Атрибут: должен иметь элементы: value или больше.',
    ],
    'image' => 'Атрибут: должен быть изображением.',
    'in' => 'Атрибут selected: недействителен.',
    'in_array' => 'Поле: attribute не существует в: other.',
    'integer' => 'Атрибут: должен быть целым числом.',
    'ip' => 'Атрибут: должен быть действительным IP-адресом.',
    'ipv4' => 'Атрибут: должен быть действительным IPv4-адресом.',
    'ipv6' => 'Атрибут: должен быть действительным адресом IPv6.',
    'json' => 'Атрибут: должен быть допустимой строкой JSON.',
    'lt' => [
        'numeric' => 'Атрибут: должен быть меньше: значения.',
        'file' => 'Атрибут: должен быть меньше: value килобайт.',
        'string' => 'Атрибут: должен содержать меньше символов: value.',
        'array' => 'Атрибут: должен содержать меньше: значений элементов.',
    ],
    'lte' => [
        'numeric' => 'Атрибут: должен быть меньше или равен: value.',
        'file' => 'Атрибут: должен быть меньше или равен: значение в килобайтах.',
        'string' => 'Атрибут: должен быть меньше или равен символу: значение.',
        'array' => 'Атрибут: не может содержать более: значений элементов.',
    ],
    'max' => [
        'numeric' => 'Атрибут: не может быть больше, чем: макс.',
        'file' => 'Атрибут: не может быть больше: max килобайт.',
        'string' => 'Атрибут: не может содержать больше символов: max.',
        'array' => 'Атрибут: не может содержать более: max элементов.',
    ],
    'mimes' => 'Атрибут: должен быть файлом типа:: values.',
    'mimetypes' => 'Атрибут: должен быть файлом типа:: values.',
    'min' => [
        'numeric' => 'Атрибут: должен быть не меньше: мин.',
        'file' => 'Атрибут: должен быть не меньше: min килобайт.',
        'string' => 'Атрибут: должен содержать не менее: min символов.',
        'array' => 'Атрибут: должен содержать как минимум: min элементов.',
    ],
    'multiple_of' => 'Атрибут: должен быть кратным: value.',
    'not_in' => 'Атрибут selected: недействителен.',
    'not_regex' => 'Формат: attribute недействителен.',
    'numeric' => 'Атрибут: должен быть числом.',
    'password' => 'Пароль неверен.',
    'present' => 'Поле: attribute должно присутствовать.',
    'regex' => 'Формат атрибута: неверен.',
    'required' => 'Поле: attribute обязательно для заполнения.',
    'required_if' => 'Поле: attribute необходимо, когда: other: значение.',
    'required_unless' => 'Поле: атрибут является обязательным, если: other не находится в: values.',
    'required_with' => 'Поле: attribute требуется, если присутствует: values.',
    'required_with_all' => 'Поле: attribute необходимо, когда присутствуют: значения.',
    'required_without' => 'Поле: attribute является обязательным, если: values отсутствует.',
    'required_without_all' => 'Поле: attribute является обязательным, если нет ни одного из: значений.',
    'prohibited' => 'Поле: attribute запрещено. ',
    'prohibited_if' => 'Поле: attribute запрещено, когда: other равно: value. ',
    'prohibited_unless' => 'Поле: attribute запрещено, если: other не находится в: values. ',
    'same' => 'Атрибут: и: другое должны совпадать.',
    'size' => [
        'numeric' => 'Атрибут: должен быть размером: size.',
        'file' => 'Атрибут: должен быть размером в килобайтах.',
        'string' => 'Атрибут: должен содержать символы: size.',
        'array' => 'Атрибут: должен содержать элементы: size.',
    ],
    'starts_with' => 'Атрибут: должен начинаться с одного из следующих значений::',
    'string' => 'Атрибут: должен быть строкой.',
    'timezone' => 'Атрибут: должен быть допустимой зоной.',
    'unique' => 'Атрибут: уже был занят.',
    'uploaded' => 'Атрибут: не удалось загрузить.',
    'url' => 'Формат атрибута: неверен.',
    'uuid' => 'Атрибут: должен быть действительным UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'на заказ сообщения',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
