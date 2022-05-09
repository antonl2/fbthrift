/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

package test.fixtures.basicannotations;

import com.facebook.swift.codec.*;
import com.facebook.swift.codec.ThriftField.Requiredness;
import com.facebook.swift.service.*;
import com.facebook.thrift.client.*;
import com.google.common.util.concurrent.ListenableFuture;
import java.io.*;
import java.util.*;
import reactor.core.publisher.Mono;

@SwiftGenerated
@com.facebook.swift.service.ThriftService("BadService")
public interface BadService extends java.io.Closeable, com.facebook.thrift.util.BlockingService {
    static com.facebook.thrift.server.RpcServerHandler createRpcServerHandler(
        final BadService _serviceImpl,
        final List<com.facebook.swift.service.ThriftEventHandler> _eventHandlers) {
        return new BadServiceRpcServerHandler(_serviceImpl, _eventHandlers);
    }

    static reactor.core.publisher.Mono<? extends com.facebook.thrift.server.ServerTransport> createServer(
        final com.facebook.swift.service.ThriftServerConfig _thriftServerConfig,
        final com.facebook.thrift.util.TransportType _transportType,
        final BadService _serviceImpl,
        final List<com.facebook.swift.service.ThriftEventHandler> _eventHandlers) {

        final com.facebook.thrift.server.RpcServerHandler _serverHandler = createRpcServerHandler(_serviceImpl, _eventHandlers);

        return com.facebook.thrift.util.RpcServerUtils.createServerTransport(_thriftServerConfig, _transportType, _serverHandler);
    }

    static com.facebook.thrift.client.ClientBuilder<BadService> clientBuilder() {
        return new ClientBuilder<BadService>() {
            @Override
            public BadService build(Mono<RpcClient> rpcClientMono) {
                BadService.Reactive _delegate =
                    new BadServiceReactiveClient(protocolId, rpcClientMono, headers, persistentHeaders);
                return new BadServiceReactiveBlockingWrapper(_delegate);
            }
        };
    }

    @Deprecated
    static BadService createClient(
      final com.facebook.thrift.client.RpcClientFactory _rpcClientFactory,
      final java.net.SocketAddress _socketAddress,
      final org.apache.thrift.ProtocolId _protocolId) {
        BadService.Reactive _delegate = Reactive.createClient(
            _rpcClientFactory,
            _socketAddress,
            _protocolId);
        return new BadServiceReactiveBlockingWrapper(_delegate);
    }

    @Deprecated
    static BadService createClient(
      final com.facebook.thrift.client.RpcClientFactory _rpcClientFactory,
      final java.net.SocketAddress _socketAddress,
      final org.apache.thrift.ProtocolId _protocolId,
      final java.util.Map<String, String> _headers,
      final java.util.Map<String, String> _persistentHeaders) {
        BadService.Reactive _delegate = Reactive.createClient(
            _rpcClientFactory,
            _socketAddress,
            _protocolId,
            _headers,
            _persistentHeaders);
        return new BadServiceReactiveBlockingWrapper(_delegate);
    }

    @Deprecated
    static BadService createClient(
      final reactor.core.publisher.Mono<com.facebook.thrift.client.RpcClient> _rpcClientMono,
      final org.apache.thrift.ProtocolId _protocolId) {
        BadService.Reactive _delegate = Reactive.createClient(
            _rpcClientMono,
            _protocolId);
        return new BadServiceReactiveBlockingWrapper(_delegate);
    }

    @Deprecated
    static BadService createClient(
      final reactor.core.publisher.Mono<com.facebook.thrift.client.RpcClient> _rpcClientMono,
      final org.apache.thrift.ProtocolId _protocolId,
      final java.util.Map<String, String> _headers,
      final java.util.Map<String, String> _persistentHeaders) {
        BadService.Reactive _delegate = Reactive.createClient(
            _rpcClientMono,
            _protocolId,
            _headers,
            _persistentHeaders);
        return new BadServiceReactiveBlockingWrapper(_delegate);
    }

    @com.facebook.swift.service.ThriftService("BadService")
    public interface Async extends java.io.Closeable, com.facebook.thrift.util.AsyncService {
        static com.facebook.thrift.server.RpcServerHandler createRpcServerHandler(
        final BadService.Async _serviceImpl,
        final List<com.facebook.swift.service.ThriftEventHandler> _eventHandlers) {
            return new BadServiceRpcServerHandler(_serviceImpl, _eventHandlers);
        }

        static reactor.core.publisher.Mono<? extends com.facebook.thrift.server.ServerTransport> createServer(
            final com.facebook.swift.service.ThriftServerConfig _thriftServerConfig,
            final com.facebook.thrift.util.TransportType _transportType,
            final BadService.Async _serviceImpl,
            final List<com.facebook.swift.service.ThriftEventHandler> _eventHandlers) {

            final com.facebook.thrift.server.RpcServerHandler _serverHandler = createRpcServerHandler(_serviceImpl, _eventHandlers);

            return com.facebook.thrift.util.RpcServerUtils.createServerTransport(_thriftServerConfig, _transportType, _serverHandler);
        }

        static com.facebook.thrift.client.ClientBuilder<BadService.Async> clientBuilder() {
            return new ClientBuilder<BadService.Async>() {
                @Override
                public BadService.Async build(Mono<RpcClient> rpcClientMono) {
                    BadService.Reactive _delegate =
                        new BadServiceReactiveClient(protocolId, rpcClientMono, headers, persistentHeaders);
                    return new BadServiceReactiveAsyncWrapper(_delegate);
                }
            };
        }

        @Deprecated
        static BadService.Async createClient(
            final com.facebook.thrift.client.RpcClientFactory _rpcClientFactory,
            final java.net.SocketAddress _socketAddress,
            final org.apache.thrift.ProtocolId _protocolId) {
                BadService.Reactive _delegate = Reactive.createClient(
                    _rpcClientFactory,
                    _socketAddress,
                    _protocolId);
                return new BadServiceReactiveAsyncWrapper(_delegate);
        }

        @Deprecated
        static BadService.Async createClient(
            final com.facebook.thrift.client.RpcClientFactory _rpcClientFactory,
            final java.net.SocketAddress _socketAddress,
            final org.apache.thrift.ProtocolId _protocolId,
            final java.util.Map<String, String> _headers,
            final java.util.Map<String, String> _persistentHeaders) {
                BadService.Reactive _delegate = Reactive.createClient(
                    _rpcClientFactory,
                    _socketAddress,
                    _protocolId,
                    _headers,
                    _persistentHeaders);
                return new BadServiceReactiveAsyncWrapper(_delegate);
        }

        @Deprecated
        static BadService.Async createClient(
            final reactor.core.publisher.Mono<com.facebook.thrift.client.RpcClient> _rpcClientMono,
            final org.apache.thrift.ProtocolId _protocolId) {
                BadService.Reactive _delegate = Reactive.createClient(
                    _rpcClientMono,
                    _protocolId);
                return new BadServiceReactiveAsyncWrapper(_delegate);
        }

        @Deprecated
        static BadService.Async createClient(
            final reactor.core.publisher.Mono<com.facebook.thrift.client.RpcClient> _rpcClientMono,
            final org.apache.thrift.ProtocolId _protocolId,
            final java.util.Map<String, String> _headers,
            final java.util.Map<String, String> _persistentHeaders) {
                BadService.Reactive _delegate = Reactive.createClient(
                    _rpcClientMono,
                    _protocolId,
                    _headers,
                    _persistentHeaders);
                return new BadServiceReactiveAsyncWrapper(_delegate);
        }

        @java.lang.Override void close();

        @ThriftMethod(value = "bar")
        ListenableFuture<Integer> bar();

        default ListenableFuture<Integer> bar(
            RpcOptions rpcOptions) {
            throw new UnsupportedOperationException();
        }

        default ListenableFuture<ResponseWrapper<Integer>> barWrapper(
            RpcOptions rpcOptions) {
            throw new UnsupportedOperationException();
        }
        @com.facebook.swift.service.ThriftInteraction("BadInteraction")
        public interface BadInteraction extends java.io.Closeable {
            @ThriftMethod(value = "foo")
            ListenableFuture<Void> foo();

            ListenableFuture<Void> foo(
                RpcOptions rpcOptions);

            ListenableFuture<ResponseWrapper<Void>> fooWrapper(
                RpcOptions rpcOptions);

            @java.lang.Override
            void close();
        }

        public BadInteraction createBadInteraction();
    }
    @java.lang.Override void close();

    @ThriftMethod(value = "bar")
    int bar() throws org.apache.thrift.TException;

    default int bar(
        RpcOptions rpcOptions) throws org.apache.thrift.TException {
        throw new UnsupportedOperationException();
    }

    default ResponseWrapper<Integer> barWrapper(
        RpcOptions rpcOptions) throws org.apache.thrift.TException {
        throw new UnsupportedOperationException();
    }

    @com.facebook.swift.service.ThriftService("BadService")
    interface Reactive extends reactor.core.Disposable, com.facebook.thrift.util.ReactiveService {
        static com.facebook.thrift.server.RpcServerHandler createRpcServerHandler(
        final BadService.Reactive _serviceImpl,
        final List<com.facebook.swift.service.ThriftEventHandler> _eventHandlers) {
            return new BadServiceRpcServerHandler(_serviceImpl, _eventHandlers);
        }

        static reactor.core.publisher.Mono<? extends com.facebook.thrift.server.ServerTransport> createServer(
            final com.facebook.swift.service.ThriftServerConfig _thriftServerConfig,
            final com.facebook.thrift.util.TransportType _transportType,
            final BadService.Reactive _serviceImpl,
            final List<com.facebook.swift.service.ThriftEventHandler> _eventHandlers) {

            final com.facebook.thrift.server.RpcServerHandler _serverHandler = createRpcServerHandler(_serviceImpl, _eventHandlers);

            return com.facebook.thrift.util.RpcServerUtils.createServerTransport(_thriftServerConfig, _transportType, _serverHandler);
        }

        static com.facebook.thrift.client.ClientBuilder<BadService.Reactive> clientBuilder() {
            return new ClientBuilder<BadService.Reactive>() {
                @Override
                public BadService.Reactive build(Mono<RpcClient> rpcClientMono) {
                    return new BadServiceReactiveClient(protocolId, rpcClientMono, headers, persistentHeaders);
                }
            };
        }

        @Deprecated
        static BadService.Reactive createClient(
            final com.facebook.thrift.client.RpcClientFactory _rpcClientFactory,
            final java.net.SocketAddress _socketAddress,
            final org.apache.thrift.ProtocolId _protocolId) {
                return new BadServiceReactiveClient(
                    _protocolId,
                    _rpcClientFactory.createRpcClient(_socketAddress),
                    java.util.Collections.emptyMap(),
                    java.util.Collections.emptyMap());
        }

        @Deprecated
        static BadService.Reactive createClient(
            final com.facebook.thrift.client.RpcClientFactory _rpcClientFactory,
            final java.net.SocketAddress _socketAddress,
            final org.apache.thrift.ProtocolId _protocolId,
            final java.util.Map<String, String> _headers,
            final java.util.Map<String, String> _persistentHeaders
            ) {
                return new BadServiceReactiveClient(
                    _protocolId,
                    _rpcClientFactory.createRpcClient(_socketAddress),
                    _headers,
                    _persistentHeaders);
        }

        @Deprecated
        static BadService.Reactive createClient(
            final reactor.core.publisher.Mono<com.facebook.thrift.client.RpcClient> _rpcClientMono,
            final org.apache.thrift.ProtocolId _protocolId) {
                return new BadServiceReactiveClient(
                    _protocolId,
                    _rpcClientMono,
                    java.util.Collections.emptyMap(),
                    java.util.Collections.emptyMap());
        }

        @Deprecated
        static BadService.Reactive createClient(
            final reactor.core.publisher.Mono<com.facebook.thrift.client.RpcClient> _rpcClientMono,
            final org.apache.thrift.ProtocolId _protocolId,
            final java.util.Map<String, String> _headers,
            final java.util.Map<String, String> _persistentHeaders
            ) {
                return new BadServiceReactiveClient(
                    _protocolId,
                    _rpcClientMono,
                    _headers,
                    _persistentHeaders);
        }

        @ThriftMethod(value = "bar")
        reactor.core.publisher.Mono<Integer> bar();

        default reactor.core.publisher.Mono<Integer> bar(RpcOptions rpcOptions) {
            throw new UnsupportedOperationException();
        }

        default reactor.core.publisher.Mono<ResponseWrapper<Integer>> barWrapper(RpcOptions rpcOptions) {
            throw new UnsupportedOperationException();
        }

        @com.facebook.swift.service.ThriftInteraction("BadInteraction")
        public interface BadInteraction extends reactor.core.Disposable {
            @ThriftMethod(value = "foo")
            reactor.core.publisher.Mono<Void> foo();

            reactor.core.publisher.Mono<Void> foo(RpcOptions rpcOptions);

            reactor.core.publisher.Mono<ResponseWrapper<Void>> fooWrapper(RpcOptions rpcOptions);

            @java.lang.Override
            void dispose();
        }

        public BadInteraction createBadInteraction();
    }
    @com.facebook.swift.service.ThriftInteraction("BadInteraction")
    public interface BadInteraction extends java.io.Closeable {
        @ThriftMethod(value = "foo")
        void foo() throws org.apache.thrift.TException;

        void foo(
            RpcOptions rpcOptions) throws org.apache.thrift.TException;

        ResponseWrapper<Void> fooWrapper(
            RpcOptions rpcOptions) throws org.apache.thrift.TException;

        @java.lang.Override
        void close();
    }

    BadInteraction createBadInteraction();
}
