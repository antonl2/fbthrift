/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
import java.util.List;
import java.util.ArrayList;
import java.util.Map;
import java.util.HashMap;
import java.util.Set;
import java.util.HashSet;
import java.util.Collections;
import java.util.BitSet;
import java.util.Arrays;
import com.facebook.thrift.*;
import com.facebook.thrift.annotations.*;
import com.facebook.thrift.async.*;
import com.facebook.thrift.meta_data.*;
import com.facebook.thrift.server.*;
import com.facebook.thrift.transport.*;
import com.facebook.thrift.protocol.*;

/**
 * Indicates a definition/feature should no longer be used.
 */
@SuppressWarnings({ "unused", "serial" })
public class Deprecated implements TBase, java.io.Serializable, Cloneable {
  private static final TStruct STRUCT_DESC = new TStruct("Deprecated");
  private static final TField MESSAGE_FIELD_DESC = new TField("message", TType.STRING, (short)1);

  public final String message;
  public static final int MESSAGE = 1;

  public Deprecated(
      String message) {
    this.message = message;
  }

  /**
   * Performs a deep copy on <i>other</i>.
   */
  public Deprecated(Deprecated other) {
    if (other.isSetMessage()) {
      this.message = TBaseHelper.deepCopy(other.message);
    } else {
      this.message = null;
    }
  }

  public Deprecated deepCopy() {
    return new Deprecated(this);
  }

  public String getMessage() {
    return this.message;
  }

  // Returns true if field message is set (has been assigned a value) and false otherwise
  public boolean isSetMessage() {
    return this.message != null;
  }

  @Override
  public boolean equals(Object _that) {
    if (_that == null)
      return false;
    if (this == _that)
      return true;
    if (!(_that instanceof Deprecated))
      return false;
    Deprecated that = (Deprecated)_that;

    if (!TBaseHelper.equalsNobinary(this.isSetMessage(), that.isSetMessage(), this.message, that.message)) { return false; }

    return true;
  }

  @Override
  public int hashCode() {
    return Arrays.deepHashCode(new Object[] {message});
  }

  // This is required to satisfy the TBase interface, but can't be implemented on immutable struture.
  public void read(TProtocol iprot) throws TException {
    throw new TException("unimplemented in android immutable structure");
  }

  public static Deprecated deserialize(TProtocol iprot) throws TException {
    String tmp_message = null;
    TField __field;
    iprot.readStructBegin();
    while (true)
    {
      __field = iprot.readFieldBegin();
      if (__field.type == TType.STOP) {
        break;
      }
      switch (__field.id)
      {
        case MESSAGE:
          if (__field.type == TType.STRING) {
            tmp_message = iprot.readString();
          } else {
            TProtocolUtil.skip(iprot, __field.type);
          }
          break;
        default:
          TProtocolUtil.skip(iprot, __field.type);
          break;
      }
      iprot.readFieldEnd();
    }
    iprot.readStructEnd();

    Deprecated _that;
    _that = new Deprecated(
      tmp_message
    );
    _that.validate();
    return _that;
  }

  public void write(TProtocol oprot) throws TException {
    validate();

    oprot.writeStructBegin(STRUCT_DESC);
    if (this.message != null) {
      oprot.writeFieldBegin(MESSAGE_FIELD_DESC);
      oprot.writeString(this.message);
      oprot.writeFieldEnd();
    }
    oprot.writeFieldStop();
    oprot.writeStructEnd();
  }

  @Override
  public String toString() {
    return toString(1, true);
  }

  @Override
  public String toString(int indent, boolean prettyPrint) {
    return TBaseHelper.toStringHelper(this, indent, prettyPrint);
  }

  public void validate() throws TException {
    // check for required fields
  }

}

