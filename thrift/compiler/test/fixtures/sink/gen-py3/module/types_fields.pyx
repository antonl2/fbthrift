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
cdef class __InitialResponse_FieldsSetter(__StructFieldsSetter):

    @staticmethod
    cdef __InitialResponse_FieldsSetter create(_module_types.cInitialResponse* struct_cpp_obj):
        cdef __InitialResponse_FieldsSetter __fbthrift_inst = __InitialResponse_FieldsSetter.__new__(__InitialResponse_FieldsSetter)
        __fbthrift_inst._struct_cpp_obj = struct_cpp_obj
        __fbthrift_inst._setters[__cstring_view(<const char*>"content")] = __InitialResponse_FieldsSetter._set_field_0
        return __fbthrift_inst

    cdef void set_field(__InitialResponse_FieldsSetter self, const char* name, object value) except *:
        cdef __cstring_view cname = __cstring_view(name)
        cdef cumap[__cstring_view, __InitialResponse_FieldsSetterFunc].iterator found = self._setters.find(cname)
        if found == self._setters.end():
            raise TypeError(f"invalid field name {name.decode('utf-8')}")
        deref(found).second(self, value)

    cdef void _set_field_0(self, __fbthrift_value) except *:
        # for field content
        if __fbthrift_value is None:
            __reset_field[_module_types.cInitialResponse](deref(self._struct_cpp_obj), 0)
            return
        if not isinstance(__fbthrift_value, str):
            raise TypeError(f'content is not a { str !r}.')
        deref(self._struct_cpp_obj).content_ref().assign(cmove(bytes_to_string(__fbthrift_value.encode('utf-8'))))
        deref(self._struct_cpp_obj).__isset.content = True


@__cython.auto_pickle(False)
cdef class __FinalResponse_FieldsSetter(__StructFieldsSetter):

    @staticmethod
    cdef __FinalResponse_FieldsSetter create(_module_types.cFinalResponse* struct_cpp_obj):
        cdef __FinalResponse_FieldsSetter __fbthrift_inst = __FinalResponse_FieldsSetter.__new__(__FinalResponse_FieldsSetter)
        __fbthrift_inst._struct_cpp_obj = struct_cpp_obj
        __fbthrift_inst._setters[__cstring_view(<const char*>"content")] = __FinalResponse_FieldsSetter._set_field_0
        return __fbthrift_inst

    cdef void set_field(__FinalResponse_FieldsSetter self, const char* name, object value) except *:
        cdef __cstring_view cname = __cstring_view(name)
        cdef cumap[__cstring_view, __FinalResponse_FieldsSetterFunc].iterator found = self._setters.find(cname)
        if found == self._setters.end():
            raise TypeError(f"invalid field name {name.decode('utf-8')}")
        deref(found).second(self, value)

    cdef void _set_field_0(self, __fbthrift_value) except *:
        # for field content
        if __fbthrift_value is None:
            __reset_field[_module_types.cFinalResponse](deref(self._struct_cpp_obj), 0)
            return
        if not isinstance(__fbthrift_value, str):
            raise TypeError(f'content is not a { str !r}.')
        deref(self._struct_cpp_obj).content_ref().assign(cmove(bytes_to_string(__fbthrift_value.encode('utf-8'))))
        deref(self._struct_cpp_obj).__isset.content = True


@__cython.auto_pickle(False)
cdef class __SinkPayload_FieldsSetter(__StructFieldsSetter):

    @staticmethod
    cdef __SinkPayload_FieldsSetter create(_module_types.cSinkPayload* struct_cpp_obj):
        cdef __SinkPayload_FieldsSetter __fbthrift_inst = __SinkPayload_FieldsSetter.__new__(__SinkPayload_FieldsSetter)
        __fbthrift_inst._struct_cpp_obj = struct_cpp_obj
        __fbthrift_inst._setters[__cstring_view(<const char*>"content")] = __SinkPayload_FieldsSetter._set_field_0
        return __fbthrift_inst

    cdef void set_field(__SinkPayload_FieldsSetter self, const char* name, object value) except *:
        cdef __cstring_view cname = __cstring_view(name)
        cdef cumap[__cstring_view, __SinkPayload_FieldsSetterFunc].iterator found = self._setters.find(cname)
        if found == self._setters.end():
            raise TypeError(f"invalid field name {name.decode('utf-8')}")
        deref(found).second(self, value)

    cdef void _set_field_0(self, __fbthrift_value) except *:
        # for field content
        if __fbthrift_value is None:
            __reset_field[_module_types.cSinkPayload](deref(self._struct_cpp_obj), 0)
            return
        if not isinstance(__fbthrift_value, str):
            raise TypeError(f'content is not a { str !r}.')
        deref(self._struct_cpp_obj).content_ref().assign(cmove(bytes_to_string(__fbthrift_value.encode('utf-8'))))
        deref(self._struct_cpp_obj).__isset.content = True


@__cython.auto_pickle(False)
cdef class __CompatibleWithKeywordSink_FieldsSetter(__StructFieldsSetter):

    @staticmethod
    cdef __CompatibleWithKeywordSink_FieldsSetter create(_module_types.cCompatibleWithKeywordSink* struct_cpp_obj):
        cdef __CompatibleWithKeywordSink_FieldsSetter __fbthrift_inst = __CompatibleWithKeywordSink_FieldsSetter.__new__(__CompatibleWithKeywordSink_FieldsSetter)
        __fbthrift_inst._struct_cpp_obj = struct_cpp_obj
        __fbthrift_inst._setters[__cstring_view(<const char*>"sink")] = __CompatibleWithKeywordSink_FieldsSetter._set_field_0
        return __fbthrift_inst

    cdef void set_field(__CompatibleWithKeywordSink_FieldsSetter self, const char* name, object value) except *:
        cdef __cstring_view cname = __cstring_view(name)
        cdef cumap[__cstring_view, __CompatibleWithKeywordSink_FieldsSetterFunc].iterator found = self._setters.find(cname)
        if found == self._setters.end():
            raise TypeError(f"invalid field name {name.decode('utf-8')}")
        deref(found).second(self, value)

    cdef void _set_field_0(self, __fbthrift_value) except *:
        # for field sink
        if __fbthrift_value is None:
            __reset_field[_module_types.cCompatibleWithKeywordSink](deref(self._struct_cpp_obj), 0)
            return
        if not isinstance(__fbthrift_value, str):
            raise TypeError(f'sink is not a { str !r}.')
        deref(self._struct_cpp_obj).sink_ref().assign(cmove(bytes_to_string(__fbthrift_value.encode('utf-8'))))
        deref(self._struct_cpp_obj).__isset.sink = True


@__cython.auto_pickle(False)
cdef class __InitialException_FieldsSetter(__StructFieldsSetter):

    @staticmethod
    cdef __InitialException_FieldsSetter create(_module_types.cInitialException* struct_cpp_obj):
        cdef __InitialException_FieldsSetter __fbthrift_inst = __InitialException_FieldsSetter.__new__(__InitialException_FieldsSetter)
        __fbthrift_inst._struct_cpp_obj = struct_cpp_obj
        __fbthrift_inst._setters[__cstring_view(<const char*>"reason")] = __InitialException_FieldsSetter._set_field_0
        return __fbthrift_inst

    cdef void set_field(__InitialException_FieldsSetter self, const char* name, object value) except *:
        cdef __cstring_view cname = __cstring_view(name)
        cdef cumap[__cstring_view, __InitialException_FieldsSetterFunc].iterator found = self._setters.find(cname)
        if found == self._setters.end():
            raise TypeError(f"invalid field name {name.decode('utf-8')}")
        deref(found).second(self, value)

    cdef void _set_field_0(self, __fbthrift_value) except *:
        # for field reason
        if __fbthrift_value is None:
            __reset_field[_module_types.cInitialException](deref(self._struct_cpp_obj), 0)
            return
        if not isinstance(__fbthrift_value, str):
            raise TypeError(f'reason is not a { str !r}.')
        deref(self._struct_cpp_obj).reason_ref().assign(cmove(bytes_to_string(__fbthrift_value.encode('utf-8'))))
        deref(self._struct_cpp_obj).__isset.reason = True


@__cython.auto_pickle(False)
cdef class __SinkException1_FieldsSetter(__StructFieldsSetter):

    @staticmethod
    cdef __SinkException1_FieldsSetter create(_module_types.cSinkException1* struct_cpp_obj):
        cdef __SinkException1_FieldsSetter __fbthrift_inst = __SinkException1_FieldsSetter.__new__(__SinkException1_FieldsSetter)
        __fbthrift_inst._struct_cpp_obj = struct_cpp_obj
        __fbthrift_inst._setters[__cstring_view(<const char*>"reason")] = __SinkException1_FieldsSetter._set_field_0
        return __fbthrift_inst

    cdef void set_field(__SinkException1_FieldsSetter self, const char* name, object value) except *:
        cdef __cstring_view cname = __cstring_view(name)
        cdef cumap[__cstring_view, __SinkException1_FieldsSetterFunc].iterator found = self._setters.find(cname)
        if found == self._setters.end():
            raise TypeError(f"invalid field name {name.decode('utf-8')}")
        deref(found).second(self, value)

    cdef void _set_field_0(self, __fbthrift_value) except *:
        # for field reason
        if __fbthrift_value is None:
            __reset_field[_module_types.cSinkException1](deref(self._struct_cpp_obj), 0)
            return
        if not isinstance(__fbthrift_value, str):
            raise TypeError(f'reason is not a { str !r}.')
        deref(self._struct_cpp_obj).reason_ref().assign(cmove(bytes_to_string(__fbthrift_value.encode('utf-8'))))
        deref(self._struct_cpp_obj).__isset.reason = True


@__cython.auto_pickle(False)
cdef class __SinkException2_FieldsSetter(__StructFieldsSetter):

    @staticmethod
    cdef __SinkException2_FieldsSetter create(_module_types.cSinkException2* struct_cpp_obj):
        cdef __SinkException2_FieldsSetter __fbthrift_inst = __SinkException2_FieldsSetter.__new__(__SinkException2_FieldsSetter)
        __fbthrift_inst._struct_cpp_obj = struct_cpp_obj
        __fbthrift_inst._setters[__cstring_view(<const char*>"reason")] = __SinkException2_FieldsSetter._set_field_0
        return __fbthrift_inst

    cdef void set_field(__SinkException2_FieldsSetter self, const char* name, object value) except *:
        cdef __cstring_view cname = __cstring_view(name)
        cdef cumap[__cstring_view, __SinkException2_FieldsSetterFunc].iterator found = self._setters.find(cname)
        if found == self._setters.end():
            raise TypeError(f"invalid field name {name.decode('utf-8')}")
        deref(found).second(self, value)

    cdef void _set_field_0(self, __fbthrift_value) except *:
        # for field reason
        if __fbthrift_value is None:
            __reset_field[_module_types.cSinkException2](deref(self._struct_cpp_obj), 0)
            return
        if not isinstance(__fbthrift_value, int):
            raise TypeError(f'reason is not a { int !r}.')
        __fbthrift_value = <cint64_t> __fbthrift_value
        deref(self._struct_cpp_obj).reason_ref().assign(__fbthrift_value)
        deref(self._struct_cpp_obj).__isset.reason = True

