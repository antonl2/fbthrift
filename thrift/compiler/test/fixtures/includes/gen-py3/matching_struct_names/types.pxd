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
cimport module.types as _module_types

cimport matching_struct_names.types_fields as __fbthrift_types_fields

cdef extern from "src/gen-py3/matching_struct_names/types.h":
  pass





cdef extern from "src/gen-cpp2/matching_struct_names_types_custom_protocol.h" namespace "::cpp2":
    cdef cppclass cMyStruct__isset "::cpp2::MyStruct::__isset":
        bint field

    cdef cppclass cMyStruct "::cpp2::MyStruct":
        cMyStruct() except +
        cMyStruct(const cMyStruct&) except +
        bint operator==(cMyStruct&)
        bint operator!=(cMyStruct&)
        bint operator<(cMyStruct&)
        bint operator>(cMyStruct&)
        bint operator<=(cMyStruct&)
        bint operator>=(cMyStruct&)
        __field_ref[string] field_ref()
        string field
        cMyStruct__isset __isset

    cdef cppclass cCombo__isset "::cpp2::Combo::__isset":
        bint listOfOurMyStructLists
        bint theirMyStructList
        bint ourMyStructList
        bint listOfTheirMyStructList

    cdef cppclass cCombo "::cpp2::Combo":
        cCombo() except +
        cCombo(const cCombo&) except +
        bint operator==(cCombo&)
        bint operator!=(cCombo&)
        bint operator<(cCombo&)
        bint operator>(cCombo&)
        bint operator<=(cCombo&)
        bint operator>=(cCombo&)
        __field_ref[vector[vector[cMyStruct]]] listOfOurMyStructLists_ref()
        vector[vector[cMyStruct]] listOfOurMyStructLists
        __field_ref[vector[_module_types.cMyStruct]] theirMyStructList_ref()
        vector[_module_types.cMyStruct] theirMyStructList
        __field_ref[vector[cMyStruct]] ourMyStructList_ref()
        vector[cMyStruct] ourMyStructList
        __field_ref[vector[vector[_module_types.cMyStruct]]] listOfTheirMyStructList_ref()
        vector[vector[_module_types.cMyStruct]] listOfTheirMyStructList
        cCombo__isset __isset




cdef class MyStruct(thrift.py3.types.Struct):
    cdef shared_ptr[cMyStruct] _cpp_obj
    cdef __fbthrift_types_fields.__MyStruct_FieldsSetter _fields_setter

    @staticmethod
    cdef create(shared_ptr[cMyStruct])



cdef class Combo(thrift.py3.types.Struct):
    cdef shared_ptr[cCombo] _cpp_obj
    cdef __fbthrift_types_fields.__Combo_FieldsSetter _fields_setter
    cdef List__List__MyStruct __field_listOfOurMyStructLists
    cdef List__module_MyStruct __field_theirMyStructList
    cdef List__MyStruct __field_ourMyStructList
    cdef List__List__module_MyStruct __field_listOfTheirMyStructList

    @staticmethod
    cdef create(shared_ptr[cCombo])


cdef class List__MyStruct(thrift.py3.types.List):
    cdef shared_ptr[vector[cMyStruct]] _cpp_obj
    @staticmethod
    cdef create(shared_ptr[vector[cMyStruct]])
    @staticmethod
    cdef shared_ptr[vector[cMyStruct]] _make_instance(object items) except *

cdef class List__List__MyStruct(thrift.py3.types.List):
    cdef shared_ptr[vector[vector[cMyStruct]]] _cpp_obj
    @staticmethod
    cdef create(shared_ptr[vector[vector[cMyStruct]]])
    @staticmethod
    cdef shared_ptr[vector[vector[cMyStruct]]] _make_instance(object items) except *

cdef class List__module_MyStruct(thrift.py3.types.List):
    cdef shared_ptr[vector[_module_types.cMyStruct]] _cpp_obj
    @staticmethod
    cdef create(shared_ptr[vector[_module_types.cMyStruct]])
    @staticmethod
    cdef shared_ptr[vector[_module_types.cMyStruct]] _make_instance(object items) except *

cdef class List__List__module_MyStruct(thrift.py3.types.List):
    cdef shared_ptr[vector[vector[_module_types.cMyStruct]]] _cpp_obj
    @staticmethod
    cdef create(shared_ptr[vector[vector[_module_types.cMyStruct]]])
    @staticmethod
    cdef shared_ptr[vector[vector[_module_types.cMyStruct]]] _make_instance(object items) except *


