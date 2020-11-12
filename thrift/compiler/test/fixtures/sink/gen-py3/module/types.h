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
void reset_field<::cpp2::InitialResponse>(
    ::cpp2::InitialResponse& obj, uint16_t index) {
  switch (index) {
    case 0:
      obj.content_ref().copy_from(default_inst<::cpp2::InitialResponse>().content_ref());
      return;
  }
}

template<>
void reset_field<::cpp2::FinalResponse>(
    ::cpp2::FinalResponse& obj, uint16_t index) {
  switch (index) {
    case 0:
      obj.content_ref().copy_from(default_inst<::cpp2::FinalResponse>().content_ref());
      return;
  }
}

template<>
void reset_field<::cpp2::SinkPayload>(
    ::cpp2::SinkPayload& obj, uint16_t index) {
  switch (index) {
    case 0:
      obj.content_ref().copy_from(default_inst<::cpp2::SinkPayload>().content_ref());
      return;
  }
}

template<>
void reset_field<::cpp2::CompatibleWithKeywordSink>(
    ::cpp2::CompatibleWithKeywordSink& obj, uint16_t index) {
  switch (index) {
    case 0:
      obj.sink_ref().copy_from(default_inst<::cpp2::CompatibleWithKeywordSink>().sink_ref());
      return;
  }
}

template<>
void reset_field<::cpp2::InitialException>(
    ::cpp2::InitialException& obj, uint16_t index) {
  switch (index) {
    case 0:
      obj.reason_ref().copy_from(default_inst<::cpp2::InitialException>().reason_ref());
      return;
  }
}

template<>
void reset_field<::cpp2::SinkException1>(
    ::cpp2::SinkException1& obj, uint16_t index) {
  switch (index) {
    case 0:
      obj.reason_ref().copy_from(default_inst<::cpp2::SinkException1>().reason_ref());
      return;
  }
}

template<>
void reset_field<::cpp2::SinkException2>(
    ::cpp2::SinkException2& obj, uint16_t index) {
  switch (index) {
    case 0:
      obj.reason_ref().copy_from(default_inst<::cpp2::SinkException2>().reason_ref());
      return;
  }
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::InitialResponse>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::FinalResponse>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::SinkPayload>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::CompatibleWithKeywordSink>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::InitialException>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::SinkException1>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}

template<>
const std::unordered_map<std::string_view, std::string_view>& PyStructTraits<
    ::cpp2::SinkException2>::namesmap() {
  static const folly::Indestructible<NamesMap> map {
    {
    }
  };
  return *map;
}
} // namespace py3
} // namespace thrift
