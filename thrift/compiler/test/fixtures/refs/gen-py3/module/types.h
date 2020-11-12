/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

#pragma once

#include <functional>
#include <folly/Range.h>

#include <thrift/lib/py3/enums.h>
#include "src/gen-cpp2/module_data.h"
#include "src/gen-cpp2/module_types.h"
namespace thrift {
namespace py3 {


template<>
const std::vector<std::pair<std::string_view, std::string_view>>& PyEnumTraits<
    ::cpp2::TypedEnum>::namesmap() {
  static const folly::Indestructible<NamesMap> pairs {
    {
    }
  };
  return *pairs;
}


template<>
const std::vector<std::pair<std::string_view, std::string_view>>& PyEnumTraits<
    ::cpp2::MyUnion::Type>::namesmap() {
  static const folly::Indestructible<NamesMap> pairs {
    {
    }
  };
  return *pairs;
}


template<>
void reset_field<::cpp2::MyField>(
    ::cpp2::MyField& obj, uint16_t index) {
  switch (index) {
    case 0:
      obj.opt_value_ref().copy_from(default_inst<::cpp2::MyField>().opt_value_ref());
      return;
    case 1:
      obj.value_ref().copy_from(default_inst<::cpp2::MyField>().value_ref());
      return;
    case 2:
      obj.req_value_ref().copy_from(default_inst<::cpp2::MyField>().req_value_ref());
      return;
  }
}

template<>
void reset_field<::cpp2::MyStruct>(
    ::cpp2::MyStruct& obj, uint16_t index) {
  switch (index) {
    case 0:
      obj.opt_ref.reset();
      return;
    case 1:
      obj.ref.reset();
      return;
    case 2:
      obj.req_ref.reset();
      return;
  }
}

template<>
void reset_field<::cpp2::StructWithUnion>(
    ::cpp2::StructWithUnion& obj, uint16_t index) {
  switch (index) {
    case 0:
      obj.u.reset();
      return;
    case 1:
      obj.aDouble_ref().copy_from(default_inst<::cpp2::StructWithUnion>().aDouble_ref());
      return;
    case 2:
      obj.f_ref().copy_from(default_inst<::cpp2::StructWithUnion>().f_ref());
      return;
  }
}

template<>
void reset_field<::cpp2::RecursiveStruct>(
    ::cpp2::RecursiveStruct& obj, uint16_t index) {
  switch (index) {
    case 0:
      obj.mes_ref().copy_from(default_inst<::cpp2::RecursiveStruct>().mes_ref());
      return;
  }
}

template<>
void reset_field<::cpp2::StructWithContainers>(
    ::cpp2::StructWithContainers& obj, uint16_t index) {
  switch (index) {
    case 0:
      obj.list_ref.reset();
      return;
    case 1:
      obj.set_ref.reset();
      return;
    case 2:
      obj.map_ref.reset();
      return;
    case 3:
      obj.list_ref_unique.reset();
      return;
    case 4:
      obj.set_ref_shared.reset();
      return;
    case 5:
      obj.list_ref_shared_const.reset();
      return;
  }
}

template<>
void reset_field<::cpp2::StructWithSharedConst>(
    ::cpp2::StructWithSharedConst& obj, uint16_t index) {
  switch (index) {
    case 0:
      obj.opt_shared_const.reset();
      return;
    case 1:
      obj.shared_const.reset();
      return;
    case 2:
      obj.req_shared_const.reset();
      return;
  }
}

template<>
void reset_field<::cpp2::Empty>(
    ::cpp2::Empty& obj, uint16_t index) {
  switch (index) {
  }
}

template<>
void reset_field<::cpp2::StructWithRef>(
    ::cpp2::StructWithRef& obj, uint16_t index) {
  switch (index) {
    case 0:
      obj.def_field.reset();
      return;
    case 1:
      obj.opt_field.reset();
      return;
    case 2:
      obj.req_field.reset();
      return;
  }
}

template<>
void reset_field<::cpp2::StructWithRefTypeUnique>(
    ::cpp2::StructWithRefTypeUnique& obj, uint16_t index) {
  switch (index) {
    case 0:
      obj.def_field.reset();
      return;
    case 1:
      obj.opt_field.reset();
      return;
    case 2:
      obj.req_field.reset();
      return;
  }
}

template<>
void reset_field<::cpp2::StructWithRefTypeShared>(
    ::cpp2::StructWithRefTypeShared& obj, uint16_t index) {
  switch (index) {
    case 0:
      obj.def_field.reset();
      return;
    case 1:
      obj.opt_field.reset();
      return;
    case 2:
      obj.req_field.reset();
      return;
  }
}

template<>
void reset_field<::cpp2::StructWithRefTypeSharedConst>(
    ::cpp2::StructWithRefTypeSharedConst& obj, uint16_t index) {
  switch (index) {
    case 0:
      obj.def_field.reset();
      return;
    case 1:
      obj.opt_field.reset();
      return;
    case 2:
      obj.req_field.reset();
      return;
  }
}

template<>
void reset_field<::cpp2::StructWithRefAndAnnotCppNoexceptMoveCtor>(
    ::cpp2::StructWithRefAndAnnotCppNoexceptMoveCtor& obj, uint16_t index) {
  switch (index) {
    case 0:
      obj.def_field.reset();
      return;
  }
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::MyUnion>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::MyField>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::MyStruct>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::StructWithUnion>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::RecursiveStruct>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::StructWithContainers>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::StructWithSharedConst>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::Empty>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::StructWithRef>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::StructWithRefTypeUnique>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::StructWithRefTypeShared>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::StructWithRefTypeSharedConst>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::StructWithRefAndAnnotCppNoexceptMoveCtor>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}
} // namespace py3
} // namespace thrift
