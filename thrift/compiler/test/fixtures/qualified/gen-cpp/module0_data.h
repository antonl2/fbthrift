/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
#pragma once

#include <array>
#include <cstddef>

#include <thrift/lib/cpp/Thrift.h>

#include "thrift/compiler/test/fixtures/qualified/gen-cpp/module0_types.h"

namespace MODULE0 {
struct _EnumEnumDataStorage {
  using type = Enum;
  static constexpr const std::size_t size = 3;
  static constexpr const std::array<Enum, 3> values = {{
    Enum::ONE,
    Enum::TWO,
    Enum::THREE,
  }};
  static constexpr const std::array<folly::StringPiece, 3> names = {{
    "ONE",
    "TWO",
    "THREE",
  }};
};
} // namespace
namespace apache { namespace thrift {
template <> struct TEnumDataStorage< ::MODULE0::Enum> {
  using storage_type =  ::MODULE0::_EnumEnumDataStorage;
};
}} // apache::thrift

