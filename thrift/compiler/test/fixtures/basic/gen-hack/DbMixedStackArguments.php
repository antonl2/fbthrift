<?hh // strict
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

/**
 * Original thrift service:-
 * DbMixedStackArguments
 */
interface DbMixedStackArgumentsAsyncIf extends \IThriftAsyncIf {
  /**
   * Original thrift definition:-
   * binary
   *   getDataByKey0(1: string key);
   */
  public function getDataByKey0(string $key): Awaitable<string>;

  /**
   * Original thrift definition:-
   * binary
   *   getDataByKey1(1: string key);
   */
  public function getDataByKey1(string $key): Awaitable<string>;
}

/**
 * Original thrift service:-
 * DbMixedStackArguments
 */
interface DbMixedStackArgumentsIf extends \IThriftSyncIf {
  /**
   * Original thrift definition:-
   * binary
   *   getDataByKey0(1: string key);
   */
  public function getDataByKey0(string $key): string;

  /**
   * Original thrift definition:-
   * binary
   *   getDataByKey1(1: string key);
   */
  public function getDataByKey1(string $key): string;
}

/**
 * Original thrift service:-
 * DbMixedStackArguments
 */
interface DbMixedStackArgumentsClientIf extends \IThriftSyncIf {
  /**
   * Original thrift definition:-
   * binary
   *   getDataByKey0(1: string key);
   */
  public function getDataByKey0(string $key): Awaitable<string>;

  /**
   * Original thrift definition:-
   * binary
   *   getDataByKey1(1: string key);
   */
  public function getDataByKey1(string $key): Awaitable<string>;
}

/**
 * Original thrift service:-
 * DbMixedStackArguments
 */
interface DbMixedStackArgumentsAsyncRpcOptionsIf extends \IThriftAsyncRpcOptionsIf {
  /**
   * Original thrift definition:-
   * binary
   *   getDataByKey0(1: string key);
   */
  public function getDataByKey0(\RpcOptions $rpc_options, string $key): Awaitable<string>;

  /**
   * Original thrift definition:-
   * binary
   *   getDataByKey1(1: string key);
   */
  public function getDataByKey1(\RpcOptions $rpc_options, string $key): Awaitable<string>;
}

/**
 * Original thrift service:-
 * DbMixedStackArguments
 */
trait DbMixedStackArgumentsClientBase {
  require extends \ThriftClientBase;

  protected function sendImpl_getDataByKey0(string $key): int {
    $currentseqid = $this->getNextSequenceID();
    $args = DbMixedStackArguments_getDataByKey0_args::fromShape(shape(
      'key' => $key,
    ));
    try {
      $this->eventHandler_->preSend('getDataByKey0', $args, $currentseqid);
      if ($this->output_ is \TBinaryProtocolAccelerated)
      {
        \thrift_protocol_write_binary($this->output_, 'getDataByKey0', \TMessageType::CALL, $args, $currentseqid, $this->output_->isStrictWrite(), false);
      }
      else if ($this->output_ is \TCompactProtocolAccelerated)
      {
        \thrift_protocol_write_compact($this->output_, 'getDataByKey0', \TMessageType::CALL, $args, $currentseqid, false);
      }
      else
      {
        $this->output_->writeMessageBegin('getDataByKey0', \TMessageType::CALL, $currentseqid);
        $args->write($this->output_);
        $this->output_->writeMessageEnd();
        $this->output_->getTransport()->flush();
      }
    } catch (\THandlerShortCircuitException $ex) {
      switch ($ex->resultType) {
        case \THandlerShortCircuitException::R_EXPECTED_EX:
        case \THandlerShortCircuitException::R_UNEXPECTED_EX:
          $this->eventHandler_->sendError('getDataByKey0', $args, $currentseqid, $ex->result);
          throw $ex->result;
        case \THandlerShortCircuitException::R_SUCCESS:
        default:
          $this->eventHandler_->postSend('getDataByKey0', $args, $currentseqid);
          return $currentseqid;
      }
    } catch (\Exception $ex) {
      $this->eventHandler_->sendError('getDataByKey0', $args, $currentseqid, $ex);
      throw $ex;
    }
    $this->eventHandler_->postSend('getDataByKey0', $args, $currentseqid);
    return $currentseqid;
  }

  protected function recvImpl_getDataByKey0(?int $expectedsequenceid = null, shape(?'read_options' => int) $options = shape()): string {
    try {
      $this->eventHandler_->preRecv('getDataByKey0', $expectedsequenceid);
      if ($this->input_ is \TBinaryProtocolAccelerated) {
        $result = \thrift_protocol_read_binary($this->input_, 'DbMixedStackArguments_getDataByKey0_result', $this->input_->isStrictRead(), Shapes::idx($options, 'read_options', 0));
      } else if ($this->input_ is \TCompactProtocolAccelerated)
      {
        $result = \thrift_protocol_read_compact($this->input_, 'DbMixedStackArguments_getDataByKey0_result', Shapes::idx($options, 'read_options', 0));
      }
      else
      {
        $rseqid = 0;
        $fname = '';
        $mtype = 0;

        $this->input_->readMessageBegin(
          inout $fname,
          inout $mtype,
          inout $rseqid,
        );
        if ($mtype == \TMessageType::EXCEPTION) {
          $x = new \TApplicationException();
          $x->read($this->input_);
          $this->input_->readMessageEnd();
          throw $x;
        }
        $result = DbMixedStackArguments_getDataByKey0_result::withDefaultValues();
        $result->read($this->input_);
        $this->input_->readMessageEnd();
        if ($expectedsequenceid !== null && ($rseqid != $expectedsequenceid)) {
          throw new \TProtocolException("getDataByKey0 failed: sequence id is out of order");
        }
      }
    } catch (\THandlerShortCircuitException $ex) {
      switch ($ex->resultType) {
        case \THandlerShortCircuitException::R_EXPECTED_EX:
          $this->eventHandler_->recvException('getDataByKey0', $expectedsequenceid, $ex->result);
          throw $ex->result;
        case \THandlerShortCircuitException::R_UNEXPECTED_EX:
          $this->eventHandler_->recvError('getDataByKey0', $expectedsequenceid, $ex->result);
          throw $ex->result;
        case \THandlerShortCircuitException::R_SUCCESS:
        default:
          $this->eventHandler_->postRecv('getDataByKey0', $expectedsequenceid, $ex->result);
          return $ex->result;
      }
    } catch (\Exception $ex) {
      $this->eventHandler_->recvError('getDataByKey0', $expectedsequenceid, $ex);
      throw $ex;
    }
    if ($result->success !== null) {
      $success = $result->success;
      $this->eventHandler_->postRecv('getDataByKey0', $expectedsequenceid, $success);
      return $success;
    }
    $x = new \TApplicationException("getDataByKey0 failed: unknown result", \TApplicationException::MISSING_RESULT);
    $this->eventHandler_->recvError('getDataByKey0', $expectedsequenceid, $x);
    throw $x;
  }

  protected function sendImpl_getDataByKey1(string $key): int {
    $currentseqid = $this->getNextSequenceID();
    $args = DbMixedStackArguments_getDataByKey1_args::fromShape(shape(
      'key' => $key,
    ));
    try {
      $this->eventHandler_->preSend('getDataByKey1', $args, $currentseqid);
      if ($this->output_ is \TBinaryProtocolAccelerated)
      {
        \thrift_protocol_write_binary($this->output_, 'getDataByKey1', \TMessageType::CALL, $args, $currentseqid, $this->output_->isStrictWrite(), false);
      }
      else if ($this->output_ is \TCompactProtocolAccelerated)
      {
        \thrift_protocol_write_compact($this->output_, 'getDataByKey1', \TMessageType::CALL, $args, $currentseqid, false);
      }
      else
      {
        $this->output_->writeMessageBegin('getDataByKey1', \TMessageType::CALL, $currentseqid);
        $args->write($this->output_);
        $this->output_->writeMessageEnd();
        $this->output_->getTransport()->flush();
      }
    } catch (\THandlerShortCircuitException $ex) {
      switch ($ex->resultType) {
        case \THandlerShortCircuitException::R_EXPECTED_EX:
        case \THandlerShortCircuitException::R_UNEXPECTED_EX:
          $this->eventHandler_->sendError('getDataByKey1', $args, $currentseqid, $ex->result);
          throw $ex->result;
        case \THandlerShortCircuitException::R_SUCCESS:
        default:
          $this->eventHandler_->postSend('getDataByKey1', $args, $currentseqid);
          return $currentseqid;
      }
    } catch (\Exception $ex) {
      $this->eventHandler_->sendError('getDataByKey1', $args, $currentseqid, $ex);
      throw $ex;
    }
    $this->eventHandler_->postSend('getDataByKey1', $args, $currentseqid);
    return $currentseqid;
  }

  protected function recvImpl_getDataByKey1(?int $expectedsequenceid = null, shape(?'read_options' => int) $options = shape()): string {
    try {
      $this->eventHandler_->preRecv('getDataByKey1', $expectedsequenceid);
      if ($this->input_ is \TBinaryProtocolAccelerated) {
        $result = \thrift_protocol_read_binary($this->input_, 'DbMixedStackArguments_getDataByKey1_result', $this->input_->isStrictRead(), Shapes::idx($options, 'read_options', 0));
      } else if ($this->input_ is \TCompactProtocolAccelerated)
      {
        $result = \thrift_protocol_read_compact($this->input_, 'DbMixedStackArguments_getDataByKey1_result', Shapes::idx($options, 'read_options', 0));
      }
      else
      {
        $rseqid = 0;
        $fname = '';
        $mtype = 0;

        $this->input_->readMessageBegin(
          inout $fname,
          inout $mtype,
          inout $rseqid,
        );
        if ($mtype == \TMessageType::EXCEPTION) {
          $x = new \TApplicationException();
          $x->read($this->input_);
          $this->input_->readMessageEnd();
          throw $x;
        }
        $result = DbMixedStackArguments_getDataByKey1_result::withDefaultValues();
        $result->read($this->input_);
        $this->input_->readMessageEnd();
        if ($expectedsequenceid !== null && ($rseqid != $expectedsequenceid)) {
          throw new \TProtocolException("getDataByKey1 failed: sequence id is out of order");
        }
      }
    } catch (\THandlerShortCircuitException $ex) {
      switch ($ex->resultType) {
        case \THandlerShortCircuitException::R_EXPECTED_EX:
          $this->eventHandler_->recvException('getDataByKey1', $expectedsequenceid, $ex->result);
          throw $ex->result;
        case \THandlerShortCircuitException::R_UNEXPECTED_EX:
          $this->eventHandler_->recvError('getDataByKey1', $expectedsequenceid, $ex->result);
          throw $ex->result;
        case \THandlerShortCircuitException::R_SUCCESS:
        default:
          $this->eventHandler_->postRecv('getDataByKey1', $expectedsequenceid, $ex->result);
          return $ex->result;
      }
    } catch (\Exception $ex) {
      $this->eventHandler_->recvError('getDataByKey1', $expectedsequenceid, $ex);
      throw $ex;
    }
    if ($result->success !== null) {
      $success = $result->success;
      $this->eventHandler_->postRecv('getDataByKey1', $expectedsequenceid, $success);
      return $success;
    }
    $x = new \TApplicationException("getDataByKey1 failed: unknown result", \TApplicationException::MISSING_RESULT);
    $this->eventHandler_->recvError('getDataByKey1', $expectedsequenceid, $x);
    throw $x;
  }

}

class DbMixedStackArgumentsAsyncClient extends \ThriftClientBase implements DbMixedStackArgumentsAsyncIf {
  use DbMixedStackArgumentsClientBase;

  /**
   * Original thrift definition:-
   * binary
   *   getDataByKey0(1: string key);
   */
  public async function getDataByKey0(string $key): Awaitable<string> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      HH\set_frame_metadata(hh_frame_metadata);
    }
    await $this->asyncHandler_->genBefore("DbMixedStackArguments", "getDataByKey0");
    $currentseqid = $this->sendImpl_getDataByKey0($key);
    $channel = $this->channel_;
    $out_transport = $this->output_->getTransport();
    $in_transport = $this->input_->getTransport();
    if ($channel !== null && $out_transport is \TMemoryBuffer && $in_transport is \TMemoryBuffer) {
      $msg = $out_transport->getBuffer();
      $out_transport->resetBuffer();
      list($result_msg, $_read_headers) = await $channel->genSendRequestResponse(new \RpcOptions(), $msg);
      $in_transport->resetBuffer();
      $in_transport->write($result_msg);
    } else {
      await $this->asyncHandler_->genWait($currentseqid);
    }
    return $this->recvImpl_getDataByKey0($currentseqid);
  }

  /**
   * Original thrift definition:-
   * binary
   *   getDataByKey1(1: string key);
   */
  public async function getDataByKey1(string $key): Awaitable<string> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      HH\set_frame_metadata(hh_frame_metadata);
    }
    await $this->asyncHandler_->genBefore("DbMixedStackArguments", "getDataByKey1");
    $currentseqid = $this->sendImpl_getDataByKey1($key);
    $channel = $this->channel_;
    $out_transport = $this->output_->getTransport();
    $in_transport = $this->input_->getTransport();
    if ($channel !== null && $out_transport is \TMemoryBuffer && $in_transport is \TMemoryBuffer) {
      $msg = $out_transport->getBuffer();
      $out_transport->resetBuffer();
      list($result_msg, $_read_headers) = await $channel->genSendRequestResponse(new \RpcOptions(), $msg);
      $in_transport->resetBuffer();
      $in_transport->write($result_msg);
    } else {
      await $this->asyncHandler_->genWait($currentseqid);
    }
    return $this->recvImpl_getDataByKey1($currentseqid);
  }

}

class DbMixedStackArgumentsClient extends \ThriftClientBase implements DbMixedStackArgumentsClientIf {
  use DbMixedStackArgumentsClientBase;

  /**
   * Original thrift definition:-
   * binary
   *   getDataByKey0(1: string key);
   */
  public async function getDataByKey0(string $key): Awaitable<string> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      HH\set_frame_metadata(hh_frame_metadata);
    }
    await $this->asyncHandler_->genBefore("DbMixedStackArguments", "getDataByKey0");
    $currentseqid = $this->sendImpl_getDataByKey0($key);
    $channel = $this->channel_;
    $out_transport = $this->output_->getTransport();
    $in_transport = $this->input_->getTransport();
    if ($channel !== null && $out_transport is \TMemoryBuffer && $in_transport is \TMemoryBuffer) {
      $msg = $out_transport->getBuffer();
      $out_transport->resetBuffer();
      list($result_msg, $_read_headers) = await $channel->genSendRequestResponse(new \RpcOptions(), $msg);
      $in_transport->resetBuffer();
      $in_transport->write($result_msg);
    } else {
      await $this->asyncHandler_->genWait($currentseqid);
    }
    return $this->recvImpl_getDataByKey0($currentseqid);
  }

  /**
   * Original thrift definition:-
   * binary
   *   getDataByKey1(1: string key);
   */
  public async function getDataByKey1(string $key): Awaitable<string> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      HH\set_frame_metadata(hh_frame_metadata);
    }
    await $this->asyncHandler_->genBefore("DbMixedStackArguments", "getDataByKey1");
    $currentseqid = $this->sendImpl_getDataByKey1($key);
    $channel = $this->channel_;
    $out_transport = $this->output_->getTransport();
    $in_transport = $this->input_->getTransport();
    if ($channel !== null && $out_transport is \TMemoryBuffer && $in_transport is \TMemoryBuffer) {
      $msg = $out_transport->getBuffer();
      $out_transport->resetBuffer();
      list($result_msg, $_read_headers) = await $channel->genSendRequestResponse(new \RpcOptions(), $msg);
      $in_transport->resetBuffer();
      $in_transport->write($result_msg);
    } else {
      await $this->asyncHandler_->genWait($currentseqid);
    }
    return $this->recvImpl_getDataByKey1($currentseqid);
  }

  /* send and recv functions */
  public function send_getDataByKey0(string $key): int {
    return $this->sendImpl_getDataByKey0($key);
  }
  public function recv_getDataByKey0(?int $expectedsequenceid = null): string {
    return $this->recvImpl_getDataByKey0($expectedsequenceid);
  }
  public function send_getDataByKey1(string $key): int {
    return $this->sendImpl_getDataByKey1($key);
  }
  public function recv_getDataByKey1(?int $expectedsequenceid = null): string {
    return $this->recvImpl_getDataByKey1($expectedsequenceid);
  }
}

class DbMixedStackArgumentsAsyncRpcOptionsClient extends \ThriftClientBase implements DbMixedStackArgumentsAsyncRpcOptionsIf {
  use DbMixedStackArgumentsClientBase;

  /**
   * Original thrift definition:-
   * binary
   *   getDataByKey0(1: string key);
   */
  public async function getDataByKey0(\RpcOptions $rpc_options, string $key): Awaitable<string> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      HH\set_frame_metadata(hh_frame_metadata);
    }
    await $this->asyncHandler_->genBefore("DbMixedStackArguments", "getDataByKey0");
    $currentseqid = $this->sendImpl_getDataByKey0($key);
    $channel = $this->channel_;
    $out_transport = $this->output_->getTransport();
    $in_transport = $this->input_->getTransport();
    if ($channel !== null && $out_transport is \TMemoryBuffer && $in_transport is \TMemoryBuffer) {
      $msg = $out_transport->getBuffer();
      $out_transport->resetBuffer();
      list($result_msg, $_read_headers) = await $channel->genSendRequestResponse($rpc_options, $msg);
      $in_transport->resetBuffer();
      $in_transport->write($result_msg);
    } else {
      await $this->asyncHandler_->genWait($currentseqid);
    }
    return $this->recvImpl_getDataByKey0($currentseqid);
  }

  /**
   * Original thrift definition:-
   * binary
   *   getDataByKey1(1: string key);
   */
  public async function getDataByKey1(\RpcOptions $rpc_options, string $key): Awaitable<string> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      HH\set_frame_metadata(hh_frame_metadata);
    }
    await $this->asyncHandler_->genBefore("DbMixedStackArguments", "getDataByKey1");
    $currentseqid = $this->sendImpl_getDataByKey1($key);
    $channel = $this->channel_;
    $out_transport = $this->output_->getTransport();
    $in_transport = $this->input_->getTransport();
    if ($channel !== null && $out_transport is \TMemoryBuffer && $in_transport is \TMemoryBuffer) {
      $msg = $out_transport->getBuffer();
      $out_transport->resetBuffer();
      list($result_msg, $_read_headers) = await $channel->genSendRequestResponse($rpc_options, $msg);
      $in_transport->resetBuffer();
      $in_transport->write($result_msg);
    } else {
      await $this->asyncHandler_->genWait($currentseqid);
    }
    return $this->recvImpl_getDataByKey1($currentseqid);
  }

}

abstract class DbMixedStackArgumentsAsyncProcessorBase extends \ThriftAsyncProcessor {
  abstract const type TThriftIf as DbMixedStackArgumentsAsyncIf;
  protected async function process_getDataByKey0(int $seqid, \TProtocol $input, \TProtocol $output): Awaitable<void> {
    $handler_ctx = $this->eventHandler_->getHandlerContext('getDataByKey0');
    $reply_type = \TMessageType::REPLY;

    $this->eventHandler_->preRead($handler_ctx, 'getDataByKey0', dict[]);

    if ($input is \TBinaryProtocolAccelerated) {
      $args = \thrift_protocol_read_binary_struct($input, 'DbMixedStackArguments_getDataByKey0_args');
    } else if ($input is \TCompactProtocolAccelerated) {
      $args = \thrift_protocol_read_compact_struct($input, 'DbMixedStackArguments_getDataByKey0_args');
    } else {
      $args = DbMixedStackArguments_getDataByKey0_args::withDefaultValues();
      $args->read($input);
    }
    $input->readMessageEnd();
    $this->eventHandler_->postRead($handler_ctx, 'getDataByKey0', $args);
    $result = DbMixedStackArguments_getDataByKey0_result::withDefaultValues();
    try {
      $this->eventHandler_->preExec($handler_ctx, 'DbMixedStackArguments', 'getDataByKey0', $args);
      $result->success = await $this->handler->getDataByKey0($args->key);
      $this->eventHandler_->postExec($handler_ctx, 'getDataByKey0', $result);
    } catch (\Exception $ex) {
      $reply_type = \TMessageType::EXCEPTION;
      $this->eventHandler_->handlerError($handler_ctx, 'getDataByKey0', $ex);
      $result = new \TApplicationException($ex->getMessage()."\n".$ex->getTraceAsString());
    }
    $this->eventHandler_->preWrite($handler_ctx, 'getDataByKey0', $result);
    if ($output is \TBinaryProtocolAccelerated)
    {
      \thrift_protocol_write_binary($output, 'getDataByKey0', $reply_type, $result, $seqid, $output->isStrictWrite());
    }
    else if ($output is \TCompactProtocolAccelerated)
    {
      \thrift_protocol_write_compact($output, 'getDataByKey0', $reply_type, $result, $seqid);
    }
    else
    {
      $output->writeMessageBegin("getDataByKey0", $reply_type, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
    $this->eventHandler_->postWrite($handler_ctx, 'getDataByKey0', $result);
  }
  protected async function process_getDataByKey1(int $seqid, \TProtocol $input, \TProtocol $output): Awaitable<void> {
    $handler_ctx = $this->eventHandler_->getHandlerContext('getDataByKey1');
    $reply_type = \TMessageType::REPLY;

    $this->eventHandler_->preRead($handler_ctx, 'getDataByKey1', dict[]);

    if ($input is \TBinaryProtocolAccelerated) {
      $args = \thrift_protocol_read_binary_struct($input, 'DbMixedStackArguments_getDataByKey1_args');
    } else if ($input is \TCompactProtocolAccelerated) {
      $args = \thrift_protocol_read_compact_struct($input, 'DbMixedStackArguments_getDataByKey1_args');
    } else {
      $args = DbMixedStackArguments_getDataByKey1_args::withDefaultValues();
      $args->read($input);
    }
    $input->readMessageEnd();
    $this->eventHandler_->postRead($handler_ctx, 'getDataByKey1', $args);
    $result = DbMixedStackArguments_getDataByKey1_result::withDefaultValues();
    try {
      $this->eventHandler_->preExec($handler_ctx, 'DbMixedStackArguments', 'getDataByKey1', $args);
      $result->success = await $this->handler->getDataByKey1($args->key);
      $this->eventHandler_->postExec($handler_ctx, 'getDataByKey1', $result);
    } catch (\Exception $ex) {
      $reply_type = \TMessageType::EXCEPTION;
      $this->eventHandler_->handlerError($handler_ctx, 'getDataByKey1', $ex);
      $result = new \TApplicationException($ex->getMessage()."\n".$ex->getTraceAsString());
    }
    $this->eventHandler_->preWrite($handler_ctx, 'getDataByKey1', $result);
    if ($output is \TBinaryProtocolAccelerated)
    {
      \thrift_protocol_write_binary($output, 'getDataByKey1', $reply_type, $result, $seqid, $output->isStrictWrite());
    }
    else if ($output is \TCompactProtocolAccelerated)
    {
      \thrift_protocol_write_compact($output, 'getDataByKey1', $reply_type, $result, $seqid);
    }
    else
    {
      $output->writeMessageBegin("getDataByKey1", $reply_type, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
    $this->eventHandler_->postWrite($handler_ctx, 'getDataByKey1', $result);
  }
}
class DbMixedStackArgumentsAsyncProcessor extends DbMixedStackArgumentsAsyncProcessorBase {
  const type TThriftIf = DbMixedStackArgumentsAsyncIf;
}

abstract class DbMixedStackArgumentsSyncProcessorBase extends \ThriftSyncProcessor {
  abstract const type TThriftIf as DbMixedStackArgumentsIf;
  protected function process_getDataByKey0(int $seqid, \TProtocol $input, \TProtocol $output): void {
    $handler_ctx = $this->eventHandler_->getHandlerContext('getDataByKey0');
    $reply_type = \TMessageType::REPLY;

    $this->eventHandler_->preRead($handler_ctx, 'getDataByKey0', dict[]);

    if ($input is \TBinaryProtocolAccelerated) {
      $args = \thrift_protocol_read_binary_struct($input, 'DbMixedStackArguments_getDataByKey0_args');
    } else if ($input is \TCompactProtocolAccelerated) {
      $args = \thrift_protocol_read_compact_struct($input, 'DbMixedStackArguments_getDataByKey0_args');
    } else {
      $args = DbMixedStackArguments_getDataByKey0_args::withDefaultValues();
      $args->read($input);
    }
    $input->readMessageEnd();
    $this->eventHandler_->postRead($handler_ctx, 'getDataByKey0', $args);
    $result = DbMixedStackArguments_getDataByKey0_result::withDefaultValues();
    try {
      $this->eventHandler_->preExec($handler_ctx, 'DbMixedStackArguments', 'getDataByKey0', $args);
      $result->success = $this->handler->getDataByKey0($args->key);
      $this->eventHandler_->postExec($handler_ctx, 'getDataByKey0', $result);
    } catch (\Exception $ex) {
      $reply_type = \TMessageType::EXCEPTION;
      $this->eventHandler_->handlerError($handler_ctx, 'getDataByKey0', $ex);
      $result = new \TApplicationException($ex->getMessage()."\n".$ex->getTraceAsString());
    }
    $this->eventHandler_->preWrite($handler_ctx, 'getDataByKey0', $result);
    if ($output is \TBinaryProtocolAccelerated)
    {
      \thrift_protocol_write_binary($output, 'getDataByKey0', $reply_type, $result, $seqid, $output->isStrictWrite());
    }
    else if ($output is \TCompactProtocolAccelerated)
    {
      \thrift_protocol_write_compact($output, 'getDataByKey0', $reply_type, $result, $seqid);
    }
    else
    {
      $output->writeMessageBegin("getDataByKey0", $reply_type, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
    $this->eventHandler_->postWrite($handler_ctx, 'getDataByKey0', $result);
  }
  protected function process_getDataByKey1(int $seqid, \TProtocol $input, \TProtocol $output): void {
    $handler_ctx = $this->eventHandler_->getHandlerContext('getDataByKey1');
    $reply_type = \TMessageType::REPLY;

    $this->eventHandler_->preRead($handler_ctx, 'getDataByKey1', dict[]);

    if ($input is \TBinaryProtocolAccelerated) {
      $args = \thrift_protocol_read_binary_struct($input, 'DbMixedStackArguments_getDataByKey1_args');
    } else if ($input is \TCompactProtocolAccelerated) {
      $args = \thrift_protocol_read_compact_struct($input, 'DbMixedStackArguments_getDataByKey1_args');
    } else {
      $args = DbMixedStackArguments_getDataByKey1_args::withDefaultValues();
      $args->read($input);
    }
    $input->readMessageEnd();
    $this->eventHandler_->postRead($handler_ctx, 'getDataByKey1', $args);
    $result = DbMixedStackArguments_getDataByKey1_result::withDefaultValues();
    try {
      $this->eventHandler_->preExec($handler_ctx, 'DbMixedStackArguments', 'getDataByKey1', $args);
      $result->success = $this->handler->getDataByKey1($args->key);
      $this->eventHandler_->postExec($handler_ctx, 'getDataByKey1', $result);
    } catch (\Exception $ex) {
      $reply_type = \TMessageType::EXCEPTION;
      $this->eventHandler_->handlerError($handler_ctx, 'getDataByKey1', $ex);
      $result = new \TApplicationException($ex->getMessage()."\n".$ex->getTraceAsString());
    }
    $this->eventHandler_->preWrite($handler_ctx, 'getDataByKey1', $result);
    if ($output is \TBinaryProtocolAccelerated)
    {
      \thrift_protocol_write_binary($output, 'getDataByKey1', $reply_type, $result, $seqid, $output->isStrictWrite());
    }
    else if ($output is \TCompactProtocolAccelerated)
    {
      \thrift_protocol_write_compact($output, 'getDataByKey1', $reply_type, $result, $seqid);
    }
    else
    {
      $output->writeMessageBegin("getDataByKey1", $reply_type, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
    $this->eventHandler_->postWrite($handler_ctx, 'getDataByKey1', $result);
  }
}
class DbMixedStackArgumentsSyncProcessor extends DbMixedStackArgumentsSyncProcessorBase {
  const type TThriftIf = DbMixedStackArgumentsIf;
}
// For backwards compatibility
class DbMixedStackArgumentsProcessor extends DbMixedStackArgumentsSyncProcessor {}

// HELPER FUNCTIONS AND STRUCTURES

class DbMixedStackArguments_getDataByKey0_args implements \IThriftStruct, \IThriftShapishStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'key',
      'type' => \TType::STRING,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'key' => 1,
  ];

  const type TConstructorShape = shape(
    ?'key' => ?string,
  );

  const type TShape = shape(
    'key' => string,
    ...
  );
  const int STRUCTURAL_ID = 4222184892931375562;
  public string $key;

  public function __construct(?string $key = null  )[] {
    $this->key = $key ?? '';
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'key'),
    );
  }

  public function getName(): string {
    return 'DbMixedStackArguments_getDataByKey0_args';
  }

  public static function getAllStructuredAnnotations(): \TStructAnnotations {
    return shape(
      'struct' => dict[],
      'fields' => dict[
      ],
    );
  }

  public static function __fromShape(self::TShape $shape)[]: this {
    return new static(
      $shape['key'],
    );
  }

  public function __toShape()[]: self::TShape {
    return shape(
      'key' => $this->key,
    );
  }
  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'key') !== null) {
      $this->key = /* HH_FIXME[4110] */ $parsed['key'];
    }    
  }

}

class DbMixedStackArguments_getDataByKey0_result implements \IThriftStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    0 => shape(
      'var' => 'success',
      'type' => \TType::STRING,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'success' => 0,
  ];

  const type TConstructorShape = shape(
    ?'success' => ?string,
  );

  const int STRUCTURAL_ID = 1365128170602685579;
  public ?string $success;

  public function __construct(?string $success = null  )[] {
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'success'),
    );
  }

  public function getName(): string {
    return 'DbMixedStackArguments_getDataByKey0_result';
  }

  public static function getAllStructuredAnnotations(): \TStructAnnotations {
    return shape(
      'struct' => dict[],
      'fields' => dict[
      ],
    );
  }

  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'success') !== null) {
      $this->success = /* HH_FIXME[4110] */ $parsed['success'];
    }    
  }

}

class DbMixedStackArguments_getDataByKey1_args implements \IThriftStruct, \IThriftShapishStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'key',
      'type' => \TType::STRING,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'key' => 1,
  ];

  const type TConstructorShape = shape(
    ?'key' => ?string,
  );

  const type TShape = shape(
    'key' => string,
    ...
  );
  const int STRUCTURAL_ID = 4222184892931375562;
  public string $key;

  public function __construct(?string $key = null  )[] {
    $this->key = $key ?? '';
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'key'),
    );
  }

  public function getName(): string {
    return 'DbMixedStackArguments_getDataByKey1_args';
  }

  public static function getAllStructuredAnnotations(): \TStructAnnotations {
    return shape(
      'struct' => dict[],
      'fields' => dict[
      ],
    );
  }

  public static function __fromShape(self::TShape $shape)[]: this {
    return new static(
      $shape['key'],
    );
  }

  public function __toShape()[]: self::TShape {
    return shape(
      'key' => $this->key,
    );
  }
  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'key') !== null) {
      $this->key = /* HH_FIXME[4110] */ $parsed['key'];
    }    
  }

}

class DbMixedStackArguments_getDataByKey1_result implements \IThriftStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    0 => shape(
      'var' => 'success',
      'type' => \TType::STRING,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'success' => 0,
  ];

  const type TConstructorShape = shape(
    ?'success' => ?string,
  );

  const int STRUCTURAL_ID = 1365128170602685579;
  public ?string $success;

  public function __construct(?string $success = null  )[] {
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'success'),
    );
  }

  public function getName(): string {
    return 'DbMixedStackArguments_getDataByKey1_result';
  }

  public static function getAllStructuredAnnotations(): \TStructAnnotations {
    return shape(
      'struct' => dict[],
      'fields' => dict[
      ],
    );
  }

  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'success') !== null) {
      $this->success = /* HH_FIXME[4110] */ $parsed['success'];
    }    
  }

}

class DbMixedStackArgumentsStaticMetadata implements \IThriftServiceStaticMetadata {
  public static function getServiceMetadata(): \tmeta_ThriftService {
    return tmeta_ThriftService::fromShape(
      shape(
        "name" => "DbMixedStackArguments",
        "functions" => vec[
          tmeta_ThriftFunction::fromShape(
            shape(
              "name" => "getDataByKey0",
              "return_type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_BINARY_TYPE,
                )
              ),
              "arguments" => vec[
                tmeta_ThriftField::fromShape(
                  shape(
                    "id" => 1,
                    "type" => tmeta_ThriftType::fromShape(
                      shape(
                        "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_STRING_TYPE,
                      )
                    ),
                    "name" => "key",
                  )
                ),
              ],
            )
          ),
          tmeta_ThriftFunction::fromShape(
            shape(
              "name" => "getDataByKey1",
              "return_type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_BINARY_TYPE,
                )
              ),
              "arguments" => vec[
                tmeta_ThriftField::fromShape(
                  shape(
                    "id" => 1,
                    "type" => tmeta_ThriftType::fromShape(
                      shape(
                        "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_STRING_TYPE,
                      )
                    ),
                    "name" => "key",
                  )
                ),
              ],
            )
          ),
        ],
      )
    );
  }
  public static function getAllStructuredAnnotations(): \TServiceAnnotations {
    return shape(
      'service' => dict[],
      'functions' => dict[
      ],
    );
  }
}

