/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
#pragma once

#include <thrift/lib/cpp2/gen/module_types_h.h>



namespace apache {
namespace thrift {
namespace tag {
} // namespace tag
namespace detail {
} // namespace detail
} // namespace thrift
} // namespace apache

// BEGIN declare_enums

// END declare_enums
// BEGIN struct_indirection

// END struct_indirection
// BEGIN forward_declare
namespace cpp2 {
class Empty;
class Nada;
} // cpp2
// END forward_declare
// BEGIN typedefs

// END typedefs
// BEGIN hash_and_equal_to
// END hash_and_equal_to
namespace cpp2 {
class Empty final  {
 private:
  friend struct ::apache::thrift::detail::st::struct_private_access;

  //  used by a static_assert in the corresponding source
  //  using signed/unsigned as true/false for quicker parsing
  using __fbthrift_cpp2_gen_json = unsigned;
  using __fbthrift_cpp2_gen_nimble = unsigned;

 public:
  using __fbthrift_cpp2_type = Empty;

THRIFT_IGNORE_ISSET_USE_WARNING_BEGIN
  Empty() {}
  // FragileConstructor for use in initialization lists only.
  [[deprecated("This constructor is deprecated")]]
  Empty(apache::thrift::FragileConstructor);

  Empty(Empty&&) = default;

  Empty(const Empty&) = default;


  Empty& operator=(Empty&&) = default;

  Empty& operator=(const Empty&) = default;
THRIFT_IGNORE_ISSET_USE_WARNING_END
  void __clear();
  bool operator==(const Empty& rhs) const;
#ifndef SWIG
  friend bool operator!=(const Empty& __x, const Empty& __y) {
    return !(__x == __y);
  }
#endif
  bool operator<(const Empty& rhs) const;
#ifndef SWIG
  friend bool operator>(const Empty& __x, const Empty& __y) {
    return __y < __x;
  }
  friend bool operator<=(const Empty& __x, const Empty& __y) {
    return !(__y < __x);
  }
  friend bool operator>=(const Empty& __x, const Empty& __y) {
    return !(__x < __y);
  }
#endif

  template <class Protocol_>
  uint32_t read(Protocol_* iprot);
  template <class Protocol_>
  uint32_t serializedSize(Protocol_ const* prot_) const;
  template <class Protocol_>
  uint32_t serializedSizeZC(Protocol_ const* prot_) const;
  template <class Protocol_>
  uint32_t write(Protocol_* prot_) const;

 private:
  template <class Protocol_>
  void readNoXfer(Protocol_* iprot);

  friend class ::apache::thrift::Cpp2Ops< Empty >;
};

void swap(Empty& a, Empty& b);

template <class Protocol_>
uint32_t Empty::read(Protocol_* iprot) {
  auto _xferStart = iprot->getCursorPosition();
  readNoXfer(iprot);
  return iprot->getCursorPosition() - _xferStart;
}

} // cpp2
namespace cpp2 {
class Nada final  {
 private:
  friend struct ::apache::thrift::detail::st::struct_private_access;

  //  used by a static_assert in the corresponding source
  //  using signed/unsigned as true/false for quicker parsing
  using __fbthrift_cpp2_gen_json = unsigned;
  using __fbthrift_cpp2_gen_nimble = unsigned;

 public:
  using __fbthrift_cpp2_type = Nada;
  enum Type : int {
    __EMPTY__ = 0,
  } ;

  Nada()
      : type_(Type::__EMPTY__) {}

  Nada(Nada&& rhs)
      : type_(Type::__EMPTY__) {
    if (this == &rhs) { return; }
    if (rhs.type_ == Type::__EMPTY__) { return; }
    switch (rhs.type_) {
      default:
      {
        assert(false);
        break;
      }
    }
    rhs.__clear();
  }

  Nada(const Nada& rhs)
      : type_(Type::__EMPTY__) {
    if (this == &rhs) { return; }
    if (rhs.type_ == Type::__EMPTY__) { return; }
    switch (rhs.type_) {
      default:
      {
        assert(false);
        break;
      }
    }
  }

  Nada& operator=(Nada&& rhs) {
    if (this == &rhs) { return *this; }
    __clear();
    if (rhs.type_ == Type::__EMPTY__) { return *this; }
    switch (rhs.type_) {
      default:
      {
        assert(false);
        break;
      }
    }
    rhs.__clear();
    return *this;
  }

  Nada& operator=(const Nada& rhs) {
    if (this == &rhs) { return *this; }
    __clear();
    if (rhs.type_ == Type::__EMPTY__) { return *this; }
    switch (rhs.type_) {
      default:
      {
        assert(false);
        break;
      }
    }
    return *this;
  }
  void __clear();

  ~Nada() {
    __clear();
  }
  union storage_type {

    storage_type() {}
    ~storage_type() {}
  } ;
  bool operator==(const Nada& rhs) const;
#ifndef SWIG
  friend bool operator!=(const Nada& __x, const Nada& __y) {
    return !(__x == __y);
  }
#endif
  bool operator<(const Nada& rhs) const;
#ifndef SWIG
  friend bool operator>(const Nada& __x, const Nada& __y) {
    return __y < __x;
  }
  friend bool operator<=(const Nada& __x, const Nada& __y) {
    return !(__y < __x);
  }
  friend bool operator>=(const Nada& __x, const Nada& __y) {
    return !(__x < __y);
  }
#endif

  Type getType() const { return static_cast<Type>(type_); }

  template <class Protocol_>
  uint32_t read(Protocol_* iprot);
  template <class Protocol_>
  uint32_t serializedSize(Protocol_ const* prot_) const;
  template <class Protocol_>
  uint32_t serializedSizeZC(Protocol_ const* prot_) const;
  template <class Protocol_>
  uint32_t write(Protocol_* prot_) const;
 protected:
  template <class T>
  void destruct(T &val) {
    (&val)->~T();
  }

  std::underlying_type_t<Type> type_;
  storage_type value_;

 private:
  template <class Protocol_>
  void readNoXfer(Protocol_* iprot);

  friend class ::apache::thrift::Cpp2Ops< Nada >;
};

void swap(Nada& a, Nada& b);

template <class Protocol_>
uint32_t Nada::read(Protocol_* iprot) {
  auto _xferStart = iprot->getCursorPosition();
  readNoXfer(iprot);
  return iprot->getCursorPosition() - _xferStart;
}

} // cpp2

namespace apache { namespace thrift {

template <> struct TEnumDataStorage<::cpp2::Nada::Type>;

template <> struct TEnumTraits<::cpp2::Nada::Type> {
  using type = ::cpp2::Nada::Type;

  static constexpr std::size_t const size = 0;
  static folly::Range<type const*> const values;
  static folly::Range<folly::StringPiece const*> const names;

  static char const* findName(type value);
  static bool findValue(char const* name, type* out);

};
}} // apache::thrift
