#
# Autogenerated by Thrift
#
# DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
#  @generated
#

from libc.stdint cimport (
    int8_t as cint8_t,
    int16_t as cint16_t,
    int32_t as cint32_t,
    int64_t as cint64_t,
    uint32_t as cuint32_t,
)
from libcpp.string cimport string
from libcpp cimport bool as cbool, nullptr, nullptr_t
from cpython cimport bool as pbool
from libcpp.memory cimport shared_ptr, unique_ptr
from libcpp.utility cimport move as cmove
from libcpp.vector cimport vector
from libcpp.set cimport set as cset
from libcpp.map cimport map as cmap, pair as cpair
from thrift.py3.exceptions cimport cTException
cimport folly.iobuf as __iobuf
cimport thrift.py3.exceptions
cimport thrift.py3.types
from thrift.py3.common cimport Protocol as __Protocol
from thrift.py3.types cimport (
    bstring,
    bytes_to_string,
    field_ref as __field_ref,
    optional_field_ref as __optional_field_ref,
    required_field_ref as __required_field_ref,
)
from folly.optional cimport cOptional as __cOptional

cimport module1.types_fields as __fbthrift_types_fields

cdef extern from "gen-py3/module1/types.h":
  pass


cdef extern from "gen-cpp2/module1_types.h" namespace "::module1":
    cdef cppclass cEnum "::module1::Enum":
        pass





cdef class Enum(thrift.py3.types.CompiledEnum):
    pass

cdef extern from "gen-cpp2/module1_types_custom_protocol.h" namespace "::module1":
    cdef cppclass cStruct__isset "::module1::Struct::__isset":
        bint first
        bint second

    cdef cppclass cStruct "::module1::Struct":
        cStruct() except +
        cStruct(const cStruct&) except +
        bint operator==(cStruct&)
        bint operator!=(cStruct&)
        bint operator<(cStruct&)
        bint operator>(cStruct&)
        bint operator<=(cStruct&)
        bint operator>=(cStruct&)
        __field_ref[cint32_t] first_ref()
        cint32_t first
        __field_ref[string] second_ref()
        string second
        cStruct__isset __isset




cdef class Struct(thrift.py3.types.Struct):
    cdef shared_ptr[cStruct] _cpp_obj
    cdef __fbthrift_types_fields.__Struct_FieldsSetter _fields_setter

    @staticmethod
    cdef create(shared_ptr[cStruct])


cdef class List__Enum(thrift.py3.types.List):
    cdef shared_ptr[vector[cEnum]] _cpp_obj
    @staticmethod
    cdef create(shared_ptr[vector[cEnum]])
    @staticmethod
    cdef shared_ptr[vector[cEnum]] _make_instance(object items) except *


cdef extern from "gen-cpp2/module1_constants.h" namespace "::module1":
    cdef cStruct cc1 "::module1::module1_constants::c1"()
    cdef vector[cEnum] ce1s "::module1::module1_constants::e1s"()
