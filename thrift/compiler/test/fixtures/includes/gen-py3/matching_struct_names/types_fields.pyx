#
# Autogenerated by Thrift
#
# DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
#  @generated
#
cimport cython as __cython
from cython.operator cimport dereference as deref
from libcpp.memory cimport make_unique, unique_ptr, shared_ptr

cimport thrift.py3.types
from thrift.py3.types cimport (
    reset_field as __reset_field,
    StructFieldsSetter as __StructFieldsSetter
)

from thrift.py3.types cimport const_pointer_cast


@__cython.auto_pickle(False)
cdef class __MyStruct_FieldsSetter(__StructFieldsSetter):

    @staticmethod
    cdef __MyStruct_FieldsSetter create(_matching_struct_names_types.cMyStruct* struct_cpp_obj):
        cdef __MyStruct_FieldsSetter __fbthrift_inst = __MyStruct_FieldsSetter.__new__(__MyStruct_FieldsSetter)
        __fbthrift_inst._struct_cpp_obj = struct_cpp_obj
        __fbthrift_inst._setters[__cstring_view(<const char*>"field")] = __MyStruct_FieldsSetter._set_field_0
        return __fbthrift_inst

    cdef void set_field(__MyStruct_FieldsSetter self, const char* name, object value) except *:
        cdef __cstring_view cname = __cstring_view(name)
        cdef cumap[__cstring_view, __MyStruct_FieldsSetterFunc].iterator found = self._setters.find(cname)
        if found == self._setters.end():
            raise TypeError(f"invalid field name {name.decode('utf-8')}")
        deref(found).second(self, value)

    cdef void _set_field_0(self, __fbthrift_value) except *:
        # for field field
        if __fbthrift_value is None:
            __reset_field[_matching_struct_names_types.cMyStruct](deref(self._struct_cpp_obj), 0)
            return
        if not isinstance(__fbthrift_value, str):
            raise TypeError(f'field is not a { str !r}.')
        deref(self._struct_cpp_obj).field_ref().assign(cmove(bytes_to_string(__fbthrift_value.encode('utf-8'))))
        deref(self._struct_cpp_obj).__isset.field = True


@__cython.auto_pickle(False)
cdef class __Combo_FieldsSetter(__StructFieldsSetter):

    @staticmethod
    cdef __Combo_FieldsSetter create(_matching_struct_names_types.cCombo* struct_cpp_obj):
        cdef __Combo_FieldsSetter __fbthrift_inst = __Combo_FieldsSetter.__new__(__Combo_FieldsSetter)
        __fbthrift_inst._struct_cpp_obj = struct_cpp_obj
        __fbthrift_inst._setters[__cstring_view(<const char*>"listOfOurMyStructLists")] = __Combo_FieldsSetter._set_field_0
        __fbthrift_inst._setters[__cstring_view(<const char*>"theirMyStructList")] = __Combo_FieldsSetter._set_field_1
        __fbthrift_inst._setters[__cstring_view(<const char*>"ourMyStructList")] = __Combo_FieldsSetter._set_field_2
        __fbthrift_inst._setters[__cstring_view(<const char*>"listOfTheirMyStructList")] = __Combo_FieldsSetter._set_field_3
        return __fbthrift_inst

    cdef void set_field(__Combo_FieldsSetter self, const char* name, object value) except *:
        cdef __cstring_view cname = __cstring_view(name)
        cdef cumap[__cstring_view, __Combo_FieldsSetterFunc].iterator found = self._setters.find(cname)
        if found == self._setters.end():
            raise TypeError(f"invalid field name {name.decode('utf-8')}")
        deref(found).second(self, value)

    cdef void _set_field_0(self, __fbthrift_value) except *:
        # for field listOfOurMyStructLists
        if __fbthrift_value is None:
            __reset_field[_matching_struct_names_types.cCombo](deref(self._struct_cpp_obj), 0)
            return
        deref(self._struct_cpp_obj).listOfOurMyStructLists_ref().assign(deref(_matching_struct_names_types.List__List__MyStruct(__fbthrift_value)._cpp_obj))
        deref(self._struct_cpp_obj).__isset.listOfOurMyStructLists = True

    cdef void _set_field_1(self, __fbthrift_value) except *:
        # for field theirMyStructList
        if __fbthrift_value is None:
            __reset_field[_matching_struct_names_types.cCombo](deref(self._struct_cpp_obj), 1)
            return
        deref(self._struct_cpp_obj).theirMyStructList_ref().assign(deref(_matching_struct_names_types.List__module_MyStruct(__fbthrift_value)._cpp_obj))
        deref(self._struct_cpp_obj).__isset.theirMyStructList = True

    cdef void _set_field_2(self, __fbthrift_value) except *:
        # for field ourMyStructList
        if __fbthrift_value is None:
            __reset_field[_matching_struct_names_types.cCombo](deref(self._struct_cpp_obj), 2)
            return
        deref(self._struct_cpp_obj).ourMyStructList_ref().assign(deref(_matching_struct_names_types.List__MyStruct(__fbthrift_value)._cpp_obj))
        deref(self._struct_cpp_obj).__isset.ourMyStructList = True

    cdef void _set_field_3(self, __fbthrift_value) except *:
        # for field listOfTheirMyStructList
        if __fbthrift_value is None:
            __reset_field[_matching_struct_names_types.cCombo](deref(self._struct_cpp_obj), 3)
            return
        deref(self._struct_cpp_obj).listOfTheirMyStructList_ref().assign(deref(_matching_struct_names_types.List__List__module_MyStruct(__fbthrift_value)._cpp_obj))
        deref(self._struct_cpp_obj).__isset.listOfTheirMyStructList = True

