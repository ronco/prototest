#!/usr/bin/env python3
import example_pb2

f = open('../hello_proto.bin', mode="rb")
data = f.read()
f.close()

readmsg = example_pb2.MyMessage()
readmsg.ParseFromString(data)

print(readmsg.name)
