<?hh
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

/**
 * Original thrift struct:-
 * MyStruct
 */
class MyStruct implements \IThriftSyncStruct, \IThriftShapishSyncStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'int_field',
      'type' => \TType::I64,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'int_field' => 1,
  ];

  const type TConstructorShape = shape(
    ?'int_field' => ?int,
  );

  const type TShape = shape(
    'int_field' => int,
  );
  const int STRUCTURAL_ID = 8549930382776002541;
  /**
   * Original thrift field:-
   * 1: i64 int_field
   */
  public int $int_field;

  public function __construct(?int $int_field = null  )[] {
    $this->int_field = $int_field ?? 0;
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'int_field'),
    );
  }

  public static function fromMap_DEPRECATED(@KeyedContainer<string, mixed> $map)[]: this {
    return new static(
      /* HH_FIXME[4110] For backwards compatibility with map's mixed values. */
      idx($map, 'int_field'),
    );
  }

  public function getName()[]: string {
    return 'MyStruct';
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.MyStruct",
        "fields" => vec[
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 1,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_I64_TYPE,
                )
              ),
              "name" => "int_field",
            )
          ),
        ],
        "is_union" => false,
      )
    );
  }

  public static function getAllStructuredAnnotations()[]: \TStructAnnotations {
    return shape(
      'struct' => dict[],
      'fields' => dict[
      ],
    );
  }

  public static function __stringifyMapKeys<T>(dict<arraykey, T> $m)[]: dict<string, T> {
    return Dict\map_keys($m, $key ==> (string)$key);
  }

  public static function __fromShape(self::TShape $shape)[]: this {
    return new static(
      $shape['int_field'],
    );
  }

  public function __toShape()[]: self::TShape {
    return shape(
      'int_field' => $this->int_field,
    );
  }
  public function getInstanceKey()[write_props]: string {
    return \TCompactSerializer::serialize($this);
  }

  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'int_field') !== null) {
      $this->int_field = /* HH_FIXME[4110] */ $parsed['int_field'];
    }    
  }

}

enum MyUnionEnum: int {
  _EMPTY_ = 0;
  union_annotated_field = 1;
  union_adapted_type = 3;
}

/**
 * Original thrift struct:-
 * MyUnion
 */
class MyUnion implements \IThriftAsyncStruct, \IThriftUnion<MyUnionEnum>, \IThriftShapishAsyncStruct {
  use \ThriftUnionSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'union_annotated_field',
      'union' => true,
      'is_wrapped' => true,
      'type' => \TType::I64,
    ),
    3 => shape(
      'var' => 'union_adapted_type',
      'union' => true,
      'adapter' => \AdapterTestIntToString::class,
      'type' => \TType::I64,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'union_annotated_field' => 1,
    'union_adapted_type' => 3,
  ];

  const type TConstructorShape = shape(
    ?'union_annotated_field' => ?int,
    ?'union_adapted_type' => ?\AdapterTestIntToString::THackType,
  );

  const type TShape = shape(
    ?'union_annotated_field' => ?int,
    ?'union_adapted_type' => ?\AdapterTestIntToString::THackType,
  );
  const int STRUCTURAL_ID = 4654710099560546823;
  /**
   * Original thrift field:-
   * 1: i64 union_annotated_field
   */
  private ?\MyFieldWrapper<int, MyUnion> $union_annotated_field;
  /**
   * Original thrift field:-
   * 3: i64 union_adapted_type
   */
  public ?\AdapterTestIntToString::THackType $union_adapted_type;
  protected MyUnionEnum $_type = MyUnionEnum::_EMPTY_;

  public function __construct()[] {
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static async function genFromShape(self::TConstructorShape $shape)[zoned_local]: Awaitable<this> {
    $obj = new static();
    $union_annotated_field = Shapes::idx($shape, 'union_annotated_field');
    if ($union_annotated_field !== null) {
      $obj->union_annotated_field = await \MyFieldWrapper::genFromThrift<int, MyUnion>($union_annotated_field, 1, $obj);
      $obj->_type = MyUnionEnum::union_annotated_field;
    }
    $union_adapted_type = Shapes::idx($shape, 'union_adapted_type');
    if ($union_adapted_type !== null) {
      $obj->union_adapted_type = $union_adapted_type;
      $obj->_type = MyUnionEnum::union_adapted_type;
    }
    return $obj;
  }

  public static async function genFromMap_DEPRECATED(@KeyedContainer<string, mixed> $map): Awaitable<this> {
    $obj = new static();
    $union_annotated_field = idx($map, 'union_annotated_field');
    if ($union_annotated_field !== null) {
      /* HH_FIXME[4110] For backwards compatibility with map's mixed values. */
      $obj->union_annotated_field = await \MyFieldWrapper::genFromThrift<int, MyUnion>($union_annotated_field, 1, $obj);
      $obj->_type = MyUnionEnum::union_annotated_field;
    }
    $union_adapted_type = idx($map, 'union_adapted_type');
    if ($union_adapted_type !== null) {
      /* HH_FIXME[4110] For backwards compatibility with map's mixed values. */
      $obj->union_adapted_type = $union_adapted_type;
      $obj->_type = MyUnionEnum::union_adapted_type;
    }
    return $obj;
  }

  public function getName()[]: string {
    return 'MyUnion';
  }

  public function getType()[]: MyUnionEnum {
    return $this->_type;
  }

  public function reset()[write_props]: void {
    switch ($this->_type) {
      case MyUnionEnum::union_annotated_field:
        $this->union_annotated_field = null;
        break;
      case MyUnionEnum::union_adapted_type:
        $this->union_adapted_type = null;
        break;
      case MyUnionEnum::_EMPTY_:
        break;
    }
    $this->_type = MyUnionEnum::_EMPTY_;
  }

  public function set_union_annotated_field(int $union_annotated_field)[write_props]: this {
    $this->reset();
    $this->_type = MyUnionEnum::union_annotated_field;
    $this->union_annotated_field = \MyFieldWrapper::fromThrift_DO_NOT_USE_THRIFT_INTERNAL<int, MyUnion>($union_annotated_field, 1, $this);
    return $this;
  }

  public function get_union_annotated_field()[]: ?\MyFieldWrapper<int, MyUnion> {
    return $this->union_annotated_field;
  }

  public function getx_union_annotated_field()[]: \MyFieldWrapper<int, MyUnion> {
    invariant(
      $this->_type === MyUnionEnum::union_annotated_field,
      'get_union_annotated_field called on an instance of MyUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->union_annotated_field as nonnull;
  }

  public function set_union_adapted_type(\AdapterTestIntToString::THackType $union_adapted_type)[write_props]: this {
    $this->reset();
    $this->_type = MyUnionEnum::union_adapted_type;
    $this->union_adapted_type = $union_adapted_type;
    return $this;
  }

  public function get_union_adapted_type()[]: ?\AdapterTestIntToString::THackType {
    return $this->union_adapted_type;
  }

  public function getx_union_adapted_type()[]: \AdapterTestIntToString::THackType {
    invariant(
      $this->_type === MyUnionEnum::union_adapted_type,
      'get_union_adapted_type called on an instance of MyUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->union_adapted_type as nonnull;
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.MyUnion",
        "fields" => vec[
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 1,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_I64_TYPE,
                )
              ),
              "name" => "union_annotated_field",
            )
          ),
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 3,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_I64_TYPE,
                )
              ),
              "name" => "union_adapted_type",
            )
          ),
        ],
        "is_union" => true,
      )
    );
  }

  public static function getAllStructuredAnnotations()[]: \TStructAnnotations {
    return shape(
      'struct' => dict[],
      'fields' => dict[
        'union_annotated_field' => shape(
          'field' => dict[
            'AnnotationStruct' => AnnotationStruct::fromShape(
              shape(
              )
            ),
          ],
          'type' => dict[],
        ),
        'union_adapted_type' => shape(
          'field' => dict[
            '\facebook\thrift\annotation\Adapter' => \facebook\thrift\annotation\Adapter::fromShape(
              shape(
                "name" => "\AdapterTestIntToString",
              )
            ),
          ],
          'type' => dict[],
        ),
      ],
    );
  }

  public static function __stringifyMapKeys<T>(dict<arraykey, T> $m)[]: dict<string, T> {
    return Dict\map_keys($m, $key ==> (string)$key);
  }

  public static async function __genFromShape(self::TShape $shape): Awaitable<this> {
    $obj = new static();
    $union_annotated_field = Shapes::idx($shape, 'union_annotated_field');
    if ($union_annotated_field !== null) {
      $obj->union_annotated_field = await \MyFieldWrapper::genFromThrift<int, MyUnion>($union_annotated_field, 1, $obj);
      $obj->_type = MyUnionEnum::union_annotated_field;
    }
    $union_adapted_type = Shapes::idx($shape, 'union_adapted_type');
    if ($union_adapted_type !== null) {
      $obj->union_adapted_type = $union_adapted_type;
      $obj->_type = MyUnionEnum::union_adapted_type;
    }
    return $obj;
  }

  public async function __genToShape(): Awaitable<self::TShape> {
    $union_annotated_field = await $this->union_annotated_field?->genUnwrap();
    return shape(
      'union_annotated_field' => $union_annotated_field,
      'union_adapted_type' => $this->union_adapted_type,
    );
  }
  public function getInstanceKey()[write_props]: string {
    return \TCompactSerializer::serialize($this);
  }

  public function readFromJson(string $jsonText): void {
    $this->_type = MyUnionEnum::_EMPTY_;
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'union_annotated_field') !== null) {
      $this->union_annotated_field = /* HH_FIXME[4110] */ $parsed['union_annotated_field'];
      $this->_type = MyUnionEnum::union_annotated_field;
    }    
    if (idx($parsed, 'union_adapted_type') !== null) {
      $this->union_adapted_type = /* HH_FIXME[4110] */ $parsed['union_adapted_type'];
      $this->_type = MyUnionEnum::union_adapted_type;
    }    
  }

  private static function __hackAdapterTypeChecks()[]: void {
    \ThriftUtil::requireSameType<\AdapterTestIntToString::TThriftType, int>();
  }

}

/**
 * Original thrift exception:-
 * MyException
 */
class MyException extends \TException implements \IThriftAsyncStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'code',
      'type' => \TType::I64,
    ),
    2 => shape(
      'var' => 'message',
      'type' => \TType::STRING,
    ),
    3 => shape(
      'var' => 'annotated_message',
      'is_wrapped' => true,
      'type' => \TType::STRING,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'code' => 1,
    'message' => 2,
    'annotated_message' => 3,
  ];

  const type TConstructorShape = shape(
    ?'code' => ?int,
    ?'message' => ?string,
    ?'annotated_message' => ?string,
  );

  const int STRUCTURAL_ID = 5996584748207663461;
  /**
   * Original thrift field:-
   * 1: i64 code
   */
  public int $code;
  /**
   * Original thrift field:-
   * 2: string message
   */
  public string $message;
  /**
   * Original thrift field:-
   * 3: string annotated_message
   */
  private ?\MyFieldWrapper<string, MyException> $annotated_message;

  public function get_annotated_message()[]: \MyFieldWrapper<string, MyException> {
    return $this->annotated_message as nonnull;
  }


  public function __construct()[] {
    parent::__construct();
    $this->code = 0;
    $this->message = '';
    $this->annotated_message = \MyFieldWrapper::fromThrift_DO_NOT_USE_THRIFT_INTERNAL<string, MyException>('', 3, $this);
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static async function genFromShape(self::TConstructorShape $shape)[zoned_local]: Awaitable<this> {
    $obj = new static();
    $code = Shapes::idx($shape, 'code');
    if ($code !== null) {
      $obj->code = $code;
    }
    $message = Shapes::idx($shape, 'message');
    if ($message !== null) {
      $obj->message = $message;
    }
    $annotated_message = Shapes::idx($shape, 'annotated_message');
    if ($annotated_message !== null) {
      await $obj->get_annotated_message()->genWrap($annotated_message);
    }
    return $obj;
  }

  public static async function genFromMap_DEPRECATED(@KeyedContainer<string, mixed> $map): Awaitable<this> {
    $obj = new static();
    $code = idx($map, 'code');
    if ($code !== null) {
      /* HH_FIXME[4110] For backwards compatibility with map's mixed values. */
      $obj->code = $code;
    }
    $message = idx($map, 'message');
    if ($message !== null) {
      /* HH_FIXME[4110] For backwards compatibility with map's mixed values. */
      $obj->message = $message;
    }
    $annotated_message = idx($map, 'annotated_message');
    if ($annotated_message !== null) {
      /* HH_FIXME[4110] For backwards compatibility with map's mixed values. */
      await $obj->get_annotated_message()->genWrap($annotated_message);
    }
    return $obj;
  }

  public function getName()[]: string {
    return 'MyException';
  }

  public static function getExceptionMetadata()[]: \tmeta_ThriftException {
    return tmeta_ThriftException::fromShape(
      shape(
        "name" => "module.MyException",
        "fields" => vec[
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 1,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_I64_TYPE,
                )
              ),
              "name" => "code",
            )
          ),
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 2,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_STRING_TYPE,
                )
              ),
              "name" => "message",
            )
          ),
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 3,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_STRING_TYPE,
                )
              ),
              "name" => "annotated_message",
            )
          ),
        ],
      )
    );
  }

  public static function getAllStructuredAnnotations()[]: \TStructAnnotations {
    return shape(
      'struct' => dict[],
      'fields' => dict[
        'annotated_message' => shape(
          'field' => dict[
            'AnnotationStruct' => AnnotationStruct::fromShape(
              shape(
              )
            ),
          ],
          'type' => dict[],
        ),
      ],
    );
  }

  public function getInstanceKey()[write_props]: string {
    return \TCompactSerializer::serialize($this);
  }

  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'code') !== null) {
      $this->code = /* HH_FIXME[4110] */ $parsed['code'];
    }    
    if (idx($parsed, 'message') !== null) {
      $this->message = /* HH_FIXME[4110] */ $parsed['message'];
    }    
    if (idx($parsed, 'annotated_message') !== null) {
      $this->annotated_message = /* HH_FIXME[4110] */ $parsed['annotated_message'];
    }    
  }

}

