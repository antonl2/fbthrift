#
# Autogenerated by Thrift
#
# DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
#  @generated
#

import typing as _typing

import folly.iobuf as _fbthrift_iobuf
import thrift.py3.builder

import facebook.thrift.annotation.thrift.types as _facebook_thrift_annotation_thrift_types
import facebook.thrift.annotation.thrift.builders as _facebook_thrift_annotation_thrift_builders
import apache.thrift.op.patch.types as _apache_thrift_op_patch_types
import apache.thrift.op.patch.builders as _apache_thrift_op_patch_builders
import apache.thrift.type.standard.types as _apache_thrift_type_standard_types
import apache.thrift.type.standard.builders as _apache_thrift_type_standard_builders

import test.fixtures.patch.module.types as _test_fixtures_patch_module_types


class MyData_Builder(thrift.py3.builder.StructBuilder):
    data1: _typing.Optional[str]
    data2: _typing.Optional[int]

    def __iter__(self) -> _typing.Iterator[_typing.Tuple[str, _typing.Any]]: ...


class InnerUnion_Builder(thrift.py3.builder.StructBuilder):
    innerOption: _typing.Optional[bytes]

    def __iter__(self) -> _typing.Iterator[_typing.Tuple[str, _typing.Any]]: ...


class MyUnion_Builder(thrift.py3.builder.StructBuilder):
    option1: _typing.Optional[str]
    option2: _typing.Optional[int]
    option3: _typing.Any

    def __iter__(self) -> _typing.Iterator[_typing.Tuple[str, _typing.Any]]: ...


class MyStruct_Builder(thrift.py3.builder.StructBuilder):
    boolVal: _typing.Optional[bool]
    byteVal: _typing.Optional[int]
    i16Val: _typing.Optional[int]
    i32Val: _typing.Optional[int]
    i64Val: _typing.Optional[int]
    floatVal: _typing.Optional[float]
    doubleVal: _typing.Optional[float]
    stringVal: _typing.Optional[str]
    binaryVal: _typing.Optional[_fbthrift_iobuf.IOBuf]
    enumVal: _typing.Optional[_test_fixtures_patch_module_types.MyEnum]
    structVal: _typing.Any
    unionVal: _typing.Any
    lateStructVal: _typing.Any
    durationVal: _typing.Any
    timeVal: _typing.Any
    optBoolVal: _typing.Optional[bool]
    optByteVal: _typing.Optional[int]
    optI16Val: _typing.Optional[int]
    optI32Val: _typing.Optional[int]
    optI64Val: _typing.Optional[int]
    optFloatVal: _typing.Optional[float]
    optDoubleVal: _typing.Optional[float]
    optStringVal: _typing.Optional[str]
    optBinaryVal: _typing.Optional[_fbthrift_iobuf.IOBuf]
    optEnumVal: _typing.Optional[_test_fixtures_patch_module_types.MyEnum]
    optStructVal: _typing.Any
    optLateStructVal: _typing.Any
    optListVal: _typing.Optional[list]
    optSetVal: _typing.Optional[set]
    optMapVal: _typing.Optional[dict]
    listMap: _typing.Optional[list]
    mapMap: _typing.Optional[dict]

    def __iter__(self) -> _typing.Iterator[_typing.Tuple[str, _typing.Any]]: ...


class LateDefStruct_Builder(thrift.py3.builder.StructBuilder):

    def __iter__(self) -> _typing.Iterator[_typing.Tuple[str, _typing.Any]]: ...


class Recursive_Builder(thrift.py3.builder.StructBuilder):
    nodes: _typing.Optional[dict]

    def __iter__(self) -> _typing.Iterator[_typing.Tuple[str, _typing.Any]]: ...


class Bar_Builder(thrift.py3.builder.StructBuilder):
    loop: _typing.Any

    def __iter__(self) -> _typing.Iterator[_typing.Tuple[str, _typing.Any]]: ...


class Loop_Builder(thrift.py3.builder.StructBuilder):
    bar: _typing.Any

    def __iter__(self) -> _typing.Iterator[_typing.Tuple[str, _typing.Any]]: ...


